document.querySelectorAll(".btn-ripple").forEach((button) => {
    button.addEventListener("click", function (e) {
        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        let ripples = document.createElement("span");
        ripples.style.left = x + "px";
        ripples.style.top = y + "px";
        ripples.classList.add("ripple");
        this.appendChild(ripples);

        setTimeout(() => {
            ripples.remove();
        }, 600);
    });
});

$(document).ready(function () {
    $("#historyTable").DataTable({
        ordering: true,
        paging: true,
        searching: true,
        info: true,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            zeroRecords: "Tidak ada data yang ditemukan",
            info: "Menampilkan halaman _PAGE_ dari _PAGES_",
            infoEmpty: "Tidak ada data yang tersedia",
            infoFiltered: "(difilter dari _MAX_ total data)",
            paginate: {
                first: "Pertama",
                last: "Terakhir",
                next: "Selanjutnya",
                previous: "Sebelumnya",
            },
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(".animate-on-scroll");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animated");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    animatedElements.forEach((element) => {
        observer.observe(element);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(
        ".bg-warning h1, .container:not(footer .container) h2, .container:not(footer .container) p, .card"
    );

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0 &&
            rect.left <=
                (window.innerWidth || document.documentElement.clientWidth) &&
            rect.right >= 0
        );
    }

    function animateElements() {
        animatedElements.forEach((element) => {
            if (
                isElementInViewport(element) &&
                !element.classList.contains("animate")
            ) {
                element.classList.add("animate");
            }
        });
    }

    // Initial check
    animateElements();

    // Trigger animation for elements above the fold immediately
    setTimeout(animateElements, 100);

    // Check on scroll
    window.addEventListener("scroll", animateElements);

    // Fallback to ensure animation occurs
    setTimeout(() => {
        document.querySelectorAll(".bg-warning h1").forEach((el) => {
            if (!el.classList.contains("animate")) {
                el.classList.add("animate");
            }
        });
    }, 1000);
});

$(document).ready(function () {
    $("#myDataTable").DataTable({
        ordering: true,
        paging: true,
        searching: true,
        info: true,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Seleksi semua input fields
    const inputs = document.querySelectorAll(".form-control");

    // Fungsi untuk mengecek apakah ada input yang terisi
    function checkInputs() {
        let isAnyFilled = false;

        // Cek apakah ada input yang memiliki nilai
        inputs.forEach((input) => {
            if (input.value.trim() !== "") {
                isAnyFilled = true;
            }
        });

        // Jika salah satu terisi, semua menjadi required
        inputs.forEach((input) => {
            if (isAnyFilled) {
                input.setAttribute("required", true);
            } else {
                input.removeAttribute("required");
            }
        });
    }

    // Event listener untuk setiap perubahan input
    inputs.forEach((input) => {
        input.addEventListener("input", checkInputs);
    });
});

function previewImage(event) {
    const imagePreview = document.getElementById("imagePreview");
    imagePreview.src = URL.createObjectURL(event.target.files[0]);
    imagePreview.style.display = "block"; // Tampilkan pratinjau gambar
    imagePreview.onload = function () {
        URL.revokeObjectURL(imagePreview.src); // Bebaskan memori
    };
}

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".method-card");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // Berhenti mengamati setelah muncul
                }
            });
        },
        {
            threshold: 0.2, // Memicu ketika 20% card terlihat
        }
    );

    cards.forEach((card) => {
        observer.observe(card);
    });
});
// Infotmation

document.addEventListener("DOMContentLoaded", function () {
    const fadeElems = document.querySelectorAll(".information-fade-in");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                }
            });
        },
        { threshold: 0.1 }
    );

    fadeElems.forEach((elem) => observer.observe(elem));
});

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".fade-in-section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target); // Berhenti mengamati setelah muncul
                }
            });
        },
        {
            threshold: 0.2, // Memicu ketika 20% section terlihat
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});
// Form Diagnosa

let dropArea = document.getElementById("formdiagnosa-drop-area");

["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

["dragenter", "dragover"].forEach((eventName) => {
    dropArea.addEventListener(eventName, highlight, false);
});

["dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, unhighlight, false);
});

function highlight(e) {
    dropArea.classList.add("highlight");
}

function unhighlight(e) {
    dropArea.classList.remove("highlight");
}

dropArea.addEventListener("drop", handleDrop, false);

function handleDrop(e) {
    let dt = e.dataTransfer;
    let files = dt.files;
    handleFiles(files);
}

function handleFiles(files) {
    if (files.length > 0) {
        const file = files[0];
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const previewImage = document.getElementById(
                    "formdiagnosa-preview-image"
                );
                previewImage.src = e.target.result;
                previewImage.style.maxHeight = "300px";
                document.getElementById(
                    "formdiagnosa-preview-container"
                ).style.display = "block";
                document.getElementById(
                    "formdiagnosa-changeFileBtn"
                ).style.display = "inline-block";
                document.querySelector(
                    "#formdiagnosa-drop-area .fa-image"
                ).style.display = "none";
                document.querySelector(
                    "#formdiagnosa-drop-area p"
                ).style.display = "none";
                document.querySelector(
                    "#formdiagnosa-drop-area .btn-warning"
                ).style.display = "none";
            };
            reader.readAsDataURL(file);
        } else {
            alert("Please select an image file.");
        }
    }
}
function changeFile() {
    document.getElementById("formdiagnosa-fileElem").value = "";
    document.getElementById("formdiagnosa-preview-container").style.display =
        "none";
    document.getElementById("formdiagnosa-changeFileBtn").style.display =
        "none";
    document.querySelector("#formdiagnosa-drop-area .fa-image").style.display =
        "block";
    document.querySelector("#formdiagnosa-drop-area p").style.display = "block";
    document.querySelector(
        "#formdiagnosa-drop-area .btn-warning"
    ).style.display = "inline-block";
}

const MAX_RECORDING_TIME = 60; // Maximum recording time in seconds
let mediaRecorder;
let audioChunks = [];
let isRecording = false;
let recordingTimer;
let audioBlob = null;

document.getElementById("recordButton").addEventListener("click", function (e) {
    e.preventDefault();
    if (!isRecording) {
        startRecording();
    } else {
        stopRecording();
    }
});

async function startRecording() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({
            audio: true,
        });
        mediaRecorder = new MediaRecorder(stream);
        audioChunks = [];

        mediaRecorder.ondataavailable = (event) => {
            audioChunks.push(event.data);
        };

        mediaRecorder.onstop = () => {
            audioBlob = new Blob(audioChunks, { type: "audio/wav" });
            const audioUrl = URL.createObjectURL(audioBlob);

            // Update audio player
            const audioPlayback = document.getElementById("audioPlayback");
            audioPlayback.src = audioUrl;
            audioPlayback.classList.remove("d-none");

            // Create a File object from the Blob
            const audioFile = new File([audioBlob], "recorded_audio.wav", {
                type: "audio/wav",
                lastModified: new Date().getTime(),
            });

            // Create FormData and append file
            const formData = new FormData();
            formData.append("fileModel2", audioFile);

            // Create a hidden input for the form
            const input = document.createElement("input");
            input.type = "file";
            input.id = "recordedAudioInput";
            input.name = "fileModel2";
            input.style.display = "none";

            // Use DataTransfer to set the file
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(audioFile);
            input.files = dataTransfer.files;

            // Remove existing input if any
            const existingInput = document.getElementById("recordedAudioInput");
            if (existingInput) {
                existingInput.remove();
            }

            // Add to form
            const form = document.querySelector('form[action="/patient-form"]');
            form.appendChild(input);

            // Update UI
            document.getElementById("recordButton").classList.add("d-none");
            document
                .getElementById("deleteRecordingBtn")
                .classList.remove("d-none");
            document.getElementById("recordingStatus").classList.add("d-none");

            // Stop all tracks
            stream.getTracks().forEach((track) => track.stop());
        };

        mediaRecorder.start();
        isRecording = true;

        // Update UI for recording state
        document.getElementById("recordButton").innerHTML =
            '<i class="fas fa-stop"></i> Selesai Rekam';
        document.getElementById("recordingStatus").classList.remove("d-none");
        document.getElementById("deleteRecordingBtn").classList.add("d-none");
        startTimer();

        // Auto stop after MAX_RECORDING_TIME
        setTimeout(() => {
            if (isRecording) {
                stopRecording();
            }
        }, MAX_RECORDING_TIME * 1000);
    } catch (err) {
        console.error("Error accessing microphone:", err);
        alert(
            "Error accessing microphone. Please ensure you have given permission to use the microphone."
        );
    }
}

function stopRecording() {
    if (mediaRecorder && isRecording) {
        mediaRecorder.stop();
        isRecording = false;
        clearInterval(recordingTimer);
    }
}

function deleteRecording() {
    const existingInput = document.getElementById("recordedAudioInput");
    if (existingInput) {
        existingInput.remove();
    }

    document.getElementById("audioPlayback").src = "";
    document.getElementById("audioPlayback").classList.add("d-none");
    document.getElementById("recordButton").classList.remove("d-none");
    document.getElementById("recordButton").innerHTML =
        '<i class="fas fa-microphone"></i> Mulai Merekam';
    document.getElementById("deleteRecordingBtn").classList.add("d-none");
    document.getElementById("recordingStatus").classList.add("d-none");
    document.getElementById("recordingTime").textContent = "00:00";

    audioChunks = [];
    audioBlob = null;
    isRecording = false;
}

function startTimer() {
    let seconds = 0;
    recordingTimer = setInterval(() => {
        seconds++;
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        document.getElementById("recordingTime").textContent = `${minutes
            .toString()
            .padStart(2, "0")}:${remainingSeconds.toString().padStart(2, "0")}`;

        if (seconds >= MAX_RECORDING_TIME) {
            clearInterval(recordingTimer);
        }
    }, 1000);
}

function handleAudioFiles(files) {
    if (files.length > 0) {
        const file = files[0];
        if (file.type.startsWith("audio/")) {
            const audioPreview = document.getElementById("audio-preview");
            audioPreview.src = URL.createObjectURL(file);
            document.getElementById("audio-preview-container").style.display =
                "block";
            document.getElementById("changeAudioBtn").style.display =
                "inline-block";
            document.querySelector(
                "#drop-area-audio .fa-microphone"
            ).style.display = "none";
            document.querySelector("#drop-area-audio p").style.display = "none";
            document.querySelector(
                "#drop-area-audio .btn-warning"
            ).style.display = "none";
        } else {
            alert("Please select an audio file.");
        }
    }
}

function changeAudioFile() {
    document.getElementById("audioFileElem").value = "";
    document.getElementById("audio-preview-container").style.display = "none";
    document.getElementById("changeAudioBtn").style.display = "none";
    document.querySelector("#drop-area-audio .fa-microphone").style.display =
        "block";
    document.querySelector("#drop-area-audio p").style.display = "block";
    document.querySelector("#drop-area-audio .btn-warning").style.display =
        "inline-block";
}

let dropArea3 = document.getElementById("drop-area-3");

["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    dropArea3.addEventListener(eventName, preventDefaults, false);
});

["dragenter", "dragover"].forEach((eventName) => {
    dropArea3.addEventListener(eventName, highlight3, false);
});

["dragleave", "drop"].forEach((eventName) => {
    dropArea3.addEventListener(eventName, unhighlight3, false);
});

function highlight3(e) {
    dropArea3.classList.add("highlight");
}

function unhighlight3(e) {
    dropArea3.classList.remove("highlight");
}

dropArea3.addEventListener("drop", handleDrop3, false);

function handleDrop3(e) {
    let dt = e.dataTransfer;
    let files = dt.files;
    handleFiles3(files);
}

function handleFiles3(files) {
    if (files.length > 0) {
        const file = files[0];
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("preview-image-3").src =
                    e.target.result;
                document.getElementById("preview-container-3").style.display =
                    "block";
                document.getElementById("changeFileBtn3").style.display =
                    "inline-block";
                document.querySelector("#drop-area-3 .fa-image").style.display =
                    "none";
                document.querySelector("#drop-area-3 p").style.display = "none";
                document.querySelector(
                    "#drop-area-3 .btn-warning"
                ).style.display = "none";
            };
            reader.readAsDataURL(file);
        } else {
            alert("Please select an image file.");
        }
    }
}

function changeFile3() {
    document.getElementById("fileElem3").value = "";
    document.getElementById("preview-container-3").style.display = "none";
    document.getElementById("changeFileBtn3").style.display = "none";
    document.querySelector("#drop-area-3 .fa-image").style.display = "block";
    document.querySelector("#drop-area-3 p").style.display = "block";
    document.querySelector("#drop-area-3 .btn-warning").style.display =
        "inline-block";
}

// Tambahkan event listener untuk audio playback
document.getElementById("audioPlayback").addEventListener("play", function () {
    // Optional: Jika Anda ingin menyembunyikan tombol lain saat audio diputar
    document.getElementById("recordButton").classList.add("d-none");
});

// Hapus event listener yang ada
// document.getElementById("audioPlayback").addEventListener("pause", function () {
//     document.getElementById("recordButton").classList.remove("d-none");
// });

// document.getElementById("audioPlayback").addEventListener("ended", function () {
//     document.getElementById("recordButton").classList.remove("d-none");
// });

// Tambahkan event listener untuk form submission
document
    .querySelector('form[action="/patient-form"]')
    .addEventListener("submit", function (e) {
        // Jika ada rekaman audio yang belum selesai, hentikan dulu
        if (isRecording) {
            e.preventDefault();
            stopRecording();
            // Tunggu sebentar untuk memastikan file sudah siap
            setTimeout(() => {
                this.submit();
            }, 500);
        }
    });
