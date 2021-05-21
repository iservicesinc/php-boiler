function darkModeInit() {
    if (localStorage.getItem('isDarkMode')) {
      body = document.getElementById("main");
      body.classList.add("dark-mode");
      body.classList.add("uk-light");
    };
};

function darkModeToggle() {
    if (!window.localStorage.getItem('isDarkMode')) {
        window.localStorage.setItem('isDarkMode', 'true');
        document.body.classList.add("dark-mode");
        document.body.classList.add("uk-light");
    } else {
        window.localStorage.removeItem('isDarkMode');
        document.body.classList.remove("dark-mode");
        document.body.classList.remove("uk-light");
    };
};

darkModeInit();