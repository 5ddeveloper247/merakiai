(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all);
        if (selectEl) {
            if (all) {
                selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
                selectEl.addEventListener(type, listener);
            }
        }
    };

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
    };

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select("#navbar .scrollto", true);
    const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlinks.forEach((navbarlink) => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (
                position >= section.offsetTop &&
                position <= section.offsetTop + section.offsetHeight
            ) {
                navbarlink.classList.add("active");
            } else {
                navbarlink.classList.remove("active");
            }
        });
    };
    window.addEventListener("load", navbarlinksActive);
    onscroll(document, navbarlinksActive);

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select("#header");
        let offset = header.offsetHeight;

        let elementPos = select(el).offsetTop;
        window.scrollTo({
            top: elementPos - offset,
            behavior: "smooth",
        });
    };

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    // let selectHeader = select('#header')
    // if (selectHeader) {
    //   const headerScrolled = () => {
    //     if (window.scrollY > 100) {
    //       selectHeader.classList.add('header-scrolled')
    //     } else {
    //       selectHeader.classList.remove('header-scrolled')
    //     }
    //   }
    //   window.addEventListener('load', headerScrolled)
    //   onscroll(document, headerScrolled)
    // }

    /**
     * Back to top button
     */
    let backtotop = select(".back-to-top");
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add("active");
            } else {
                backtotop.classList.remove("active");
            }
        };
        window.addEventListener("load", toggleBacktotop);
        onscroll(document, toggleBacktotop);
    }

    /**
     * Mobile nav toggle
     */
    on("click", ".mobile-nav-toggle", function (e) {
        select("#navbar").classList.toggle("navbar-mobile");
        this.classList.toggle("bi-list");
        this.classList.toggle("bi-x");
    });

    /**
     * Mobile nav dropdowns activate
     */
    // on(
    //     "click",
    //     ".navbar .dropdown > a",
    //     function (e) {
    //         if (select("#navbar").classList.contains("navbar-mobile")) {
    //             e.preventDefault();
    //             this.nextElementSibling.classList.toggle("dropdown-active");
    //         }
    //     },
    //     true
    // );
    on(
        "click",
        ".navbar .dropdown > a",
        function (e) {
            if (select("#navbar").classList.contains("navbar-mobile")) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle("dropdown-active");
            }
        },
        true
    );
    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on(
        "click",
        ".scrollto",
        function (e) {
            if (select(this.hash)) {
                e.preventDefault();

                let navbar = select("#navbar");
                if (navbar.classList.contains("navbar-mobile")) {
                    navbar.classList.remove("navbar-mobile");
                    let navbarToggle = select(".mobile-nav-toggle");
                    navbarToggle.classList.toggle("bi-list");
                    navbarToggle.classList.toggle("bi-x");
                }
                scrollto(this.hash);
            }
        },
        true
    );

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener("load", () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash);
            }
        }
    });

    /**
     * Preloader
     */
    let preloader = select("#preloader1");
    if (preloader) {
        window.addEventListener("load", () => {
            setTimeout(() => {
                preloader.remove();
            }, 2000);
        });
    }

    /**
     * Animation on scroll
     */
    window.addEventListener("load", () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            // once: true,
            mirror: false,
        });
    });
})();

// For Search input
// document.querySelector('.btn-get-started').addEventListener('click', function(e) {
//   if ($('#input_get_started').val() == '') {
//     $('#input_get_started').hide().toggleClass('d-none').fadeToggle(2000);
//     $('.btn-get-started').hide().toggleClass('position-abs').fadeToggle(2000);
//     return
//   }
//   alert('not empty');
// });

let input = document.querySelector(".input");
let btn = document.querySelector(".btn");
let parent = document.querySelector(".parent");

btn.addEventListener("click", () => {
    parent.classList.toggle("active");
    input.focus();
});
// console.log(window.location);

// chatbot scripts starts
const chatbotToggle = document.querySelector(".chatbot__button");
const sendChatBtn = document.querySelector(".chatbot__input-box span");
const chatInput = document.querySelector(".chatbot__textarea");
const chatBox = document.querySelector(".chatbot__box");
const chatbotCloseBtn = document.querySelector(".chatbot__header span");

let userMessage;
// Need GPT key
const inputInitHeight = chatInput.scrollHeight;
const API_KEY = "HERE";

const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chatbot__chat", className);
    let chatContent =
        className === "outgoing"
            ? `<p></p>`
            : `<span class="material-symbols-outlined">smart_toy</span> <p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi;
};

const generateResponse = (incomingChatLi) => {
    const API_URL = "https://api.openai.com/v1/chat/completions";
    const messageElement = incomingChatLi.querySelector("p");

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${API_KEY}`,
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            message: [{ role: "user", content: userMessage }],
        }),
    };
    fetch(API_URL, requestOptions)
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            messageElement.textContent = data.choices[0].message.content;
        })
        .catch((error) => {
            messageElement.classList.add("error");
            messageElement.textContent = "Oops! Please try again!";
            console.log(error);
        })
        .finally(() => chatBox.scrollTo(0, chatBox.scrollHeight));
};

const handleChat = () => {
    userMessage = chatInput.value.trim();
    if (!userMessage) return;
    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;

    chatBox.appendChild(createChatLi(userMessage, "outgoing"));
    chatBox.scrollTo(0, chatBox.scrollHeight);

    setTimeout(() => {
        const incomingChatLi = createChatLi("Thinking...", "incoming");
        chatBox.appendChild(incomingChatLi);
        chatBox.scrollTo(0, chatBox.scrollHeight);
        generateResponse(incomingChatLi);
    }, 600);
};

chatInput.addEventListener("input", () => {
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});
chatInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleChat();
    }
});
chatbotToggle.addEventListener("click", () =>
    document.body.classList.toggle("show-chatbot")
);
chatbotCloseBtn.addEventListener("click", () =>
    document.body.classList.remove("show-chatbot")
);
// sendChatBtn.addEventListener("click", handleChat);
// // chatbot scripts ends
// (function () {
//     "use strict";

//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var chatforms = document.querySelectorAll(".chat-validation-form");

//     // Loop over them and prevent submission
//     Array.prototype.slice.call(chatforms).forEach(function (form) {
//         form.addEventListener(
//             "submit",
//             function (event) {
//                 if (!form.checkValidity()) {
//                     event.preventDefault();
//                     event.stopPropagation();
//                 }

//                 form.classList.add("was-validated");
//                 chatBox.classList.remove("d-none");
//                 document.getElementById("first-chat").classList.add("d-none");
//                 document
//                     .getElementsByClassName("chatbot__input-box")
//                     .classList.remove("d-none");
//                 event.preventDefault();
//                 event.stopPropagation();
//             },
//             false
//         );
//     });
// })();
