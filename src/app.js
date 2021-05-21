import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
UIkit.use(Icons);


darkModeInit = () => {
    if (localStorage.getItem('isDarkMode')) {
      body = document.getElementById("main");
      body.classList.add("dark-mode");
      body.classList.add("uk-light");
    }
}

darkModeToggle = () => {
    if (!window.localStorage.getItem('isDarkMode')) {
        window.localStorage.setItem('isDarkMode', 'true');
        document.body.classList.add("dark-mode");
        document.body.classList.add("uk-light");
    } else {
        window.localStorage.removeItem('isDarkMode');
        document.body.classList.remove("dark-mode");
        document.body.classList.remove("uk-light");
    }
}