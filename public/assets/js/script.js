const words = ["Frontend Developer|", "Software Engineer|"];
let i = 0;
let j = 2;
let currentWord = "I'm";
let isDeleting = false;

function type() {
    currentWord = words[i];
    if (isDeleting) {
        document.getElementById("typewriter").textContent =
            currentWord.substring(0, j - 1);
        j--;
        if (j == 0) {
            isDeleting = false;
            i++;
            if (i == words.length) {
                i = 0;
            }
        }
    } else {
        document.getElementById("typewriter").textContent =
            currentWord.substring(0, j + 1);
        j++;
        if (j == currentWord.length) {
            isDeleting = true;
        }
    }
    setTimeout(type, 150);
}

type();

var toTopButton = document.getElementById("to-top-button");

if (toTopButton) {
    window.onscroll = function () {
        if (
            document.body.scrollTop > 500 ||
            document.documentElement.scrollTop > 500
        ) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    };

    window.goToTop = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };
}

document.getElementById("submitBtn").addEventListener("click", function () {
    // Refresh the page
    location.reload();

    // Scroll to the top of the page
    window.scrollTo(0, 0);
});
