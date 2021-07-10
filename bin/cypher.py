#!/usr/bin/env python
#  ___    ____                  _               
# |_ _|  / ___|  ___ _ ____   _(_) ___ ___  ___ 
#  | |   \___ \ / _ \ '__\ \ / / |/ __/ _ \/ __|
#  | |    ___) |  __/ |   \ V /| | (_|  __/\__ \
# |___|  |____/ \___|_|    \_/ |_|\___\___||___/
#             ...when IT matters!				
#                                                 
# https://www.iservicesinc.net
# Copyright 2021 I Services, Inc. All rights reserved.
# 
# signature.py is a source code signing tool to create digital signatures for your project.
# 
# Generates json object of package details with hashes for each file, and a checksum of the package contents.
# 
# usage: cypher.py [-h] [-c CHECKSUM] [-i IGNORE [IGNORE ...]] [-s] [-v] path
#
# positional arguments:
#   path                                                    directory to create signatures of.
#
# optional arguments:
#   -h, --help                                              show this help message and exit
#   -c CHECKSUM, --checksum CHECKSUM                        signature hash to verify.
#   -i IGNORE [IGNORE ...], --ignore IGNORE [IGNORE ...]    path or filename pattern to ignore.
#   -s, --sign                                              output to signature.json file.
#   -v, --verbose                                           output to stdout.

import os, sys, glob, json, hashlib, re, argparse

parser = argparse.ArgumentParser()
parser.add_argument("path", help="directory to create signatures of.")
parser.add_argument("-c", "--checksum", help="signature hash to verify.")
parser.add_argument("-i", "--ignore", action="extend", nargs="+", type=str, help="path or filename pattern to ignore.")
parser.add_argument("-s", "--sign", help="output to signature.json file.", action="store_true")
parser.add_argument("-v", "--verbose", help="output to stdout.", action="store_true")
args = parser.parse_args()
signdb = {}
signdb['files'] = {}

if os.path.isfile('package.json'):
    with open('package.json') as f:
        data = json.load(f)
    
    signdb['package'] = {
        "name": data['name'],
        "version": data['version'],
        "author": data['author'],
    }

if os.path.isdir(args.path):
    path = os.path.abspath(args.path)
    files = glob.glob(path + '/**/*', recursive=True)
    last_modified = os.path.getctime(max(files, key=os.path.getctime))

    for file in files:
        ignored = ['vendor', '.cache', '.log', 'ignore']
        if args.ignore:
            ignored.append(args.ignore)
        if (os.path.isfile(file) and not any(ele in file for ele in ignored)):
            with open(file, 'rb') as f:
                d = f.read()
                h = hashlib.sha1(d).hexdigest()
                signdb['files'][os.path.relpath(file, path)] = h

    signdb['timestamp'] = last_modified
    content = {
        "files": signdb['files']
    }
    if 'package' in signdb.keys():
        content['package'] = signdb['package']

    data = json.dumps(content).encode("ascii")
    signdb['checksum'] = hashlib.sha384(data).hexdigest()

elif os.path.isfile(args.path):
    last_modified = os.path.getctime(args.path)
    signdb['timestamp'] = last_modified
    with open(args.path, 'rb') as f:
        d = f.read()
        h = hashlib.sha1(d).hexdigest()
        signdb['files'][os.path.relpath(file, path)] = h

    content = {
        "files": signdb['files']
    }
    if 'package' in signdb.keys():
        content['package'] = signdb['package']

    data = json.dumps(content).encode("ascii")
    signdb['checksum'] = hashlib.sha384(data).hexdigest()
    
    if args.checksum == h:
        print("Signature verified!")
    elif re.fullmatch(r'^[a-f0-9]{40}$', args.checksum):
        print("Signature incorrect!")
    else:
        print("Invlaid checksum provided!")
            
else:
    print("Invalid path provided!")

if args.sign:
    print("Generating signatures...")
    with open('signature.json', 'w') as f:
        f.write(json.dumps(signdb, indent=4, sort_keys=True))
        
elif args.checksum:
    if args.checksum == signdb['checksum']:
        print("Signature verified!")
    elif re.fullmatch(r'^[a-f0-9]{96}$', args.checksum):
        print("Signature incorrect!")
    else:
        print("Invlaid checksum provided!")

if args.verbose:
    print(json.dumps(signdb, indent=4, sort_keys=True))
    quit()