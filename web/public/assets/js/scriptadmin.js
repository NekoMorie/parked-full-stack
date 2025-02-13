document.addEventListener("DOMContentLoaded", function () {
    function updateDateTime() {
        const now = new Date();
        const timeElement = document.getElementById("current-time");
        const dateElement = document.getElementById("current-date");

        // Format time as HH:MM:SS
        const time = now.toLocaleTimeString("en-US", { hour12: false });

        // Format date as Day, Month Date, Year
        const date = now.toLocaleDateString("en-US", {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        });

        timeElement.textContent = time;
        dateElement.textContent = date;
    }

    // Update time every second
    setInterval(updateDateTime, 1000);

    // Initial call to set the time immediately
    updateDateTime();
});

//user manipulation
$(document).ready(function () {
    // Add photo preview functionality
    $("#profilePhoto").change(function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $("#photoPreview").attr("src", e.target.result).show();
            };
            reader.readAsDataURL(file);
        }
    });

    // Hide password mismatch message when user starts typing in password fields
    $("#password, #confirmPassword").on("input", function () {
        $("#passwordMismatch").hide();
    });
});

$(document).ready(function () {
    $(document).ready(function () {
        $("#historyTable").DataTable({
            pageLength: 10,
            lengthMenu: [10, 25, 50, 100],
            searching: true,
            language: {
                lengthMenu: "Show _MENU_ entries per page",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                paginate: {
                    previous: "&laquo;", // Mengubah simbol sebelumnya
                    next: "&raquo;", // Mengubah simbol berikutnya
                },
            },
            dom: '<"top"lf>rt<"bottom"ip><"clear">', // Posisi elemen DataTable
        });
    });
});

function confirmDelete(id, photo) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to undo this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            deleteData(id, photo);
        }
    });
}

function confirmDelete(id) {
    console.log("Confirm delete for ID:", id); // Debugging

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to undo this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `/deleteUser/${id}`;
        }
    });
}

// function deleteData(id) {
//     console.log("Attempting to delete data for ID:", id); // Debugging

//     $.ajax({
//         url: `/deleteUser/${id}`,
//         type: "GET",
//         success: function (response) {
//             Swal.fire("Deleted!", response.message, "success").then(() => {
//                 location.reload();
//             });
//         },
//         error: function (xhr) {
//             Swal.fire(
//                 "Error!",
//                 "Something went wrong. Please try again.",
//                 "error"
//             );
//         },
//     });
// }

//user manage
// $(document).ready(function() {
//     let allUsers = [
//         { id: 1, name: "admin", email: "admin@admin.com", photo: "https://via.placeholder.com/50" },
//         { id: 2, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 3, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 4, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 5, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 6, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 7, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 8, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 9, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 10, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 7, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 8, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 9, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 10, name: "Fatih Nurrobi", email: "fatihnurrobi@gmail.com", photo: "https://via.placeholder.com/50" },
//         { id: 11, name: "Davi", email: "admin@admin.com", photo: "https://via.placeholder.com/50" }
//         // Add more mock users here with photo URLs
//     ];
//     let users = [...allUsers];
//     let currentPage = 1;
//     let entriesPerPage = 10;

//     function renderTable() {
//         let start = (currentPage - 1) * entriesPerPage;
//         let end = start + entriesPerPage;
//         let paginatedUsers = users.slice(start, end);

//         $('#userTableBody').empty();
//         paginatedUsers.forEach((user, index) => {
//             $('#userTableBody').append(`
//                 <tr>
//                     <td>${start + index + 1}</td>
//                     <td><img src="${user.photo}" alt="${user.name}" class="rounded-circle" width="40" height="40"></td>
//                     <td>${user.name}</td>
//                     <td>${user.email}</td>
//                     <td>
//                         <button class="btn btn-warning btn-sm edit-btn me-1" data-id="${user.id}" title="Edit">
//                             <i class="fas fa-edit"></i>
//                         </button>
//                         <button class="btn btn-danger btn-sm delete-btn" data-id="${user.id}" title="Delete">
//                             <i class="fas fa-trash"></i>
//                         </button>
//                     </td>
//                 </tr>
//             `);
//         });

//         $('#showingEntries').text(`Showing ${start + 1} to ${Math.min(end, users.length)} of ${users.length} entries`);
//         renderPagination();
//     }

//     function renderPagination() {
//         let totalPages = Math.ceil(users.length / entriesPerPage);
//         $('.pagination').empty();

//         $('.pagination').append(`
//             <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
//                 <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>
//             </li>
//         `);

//         for (let i = 1; i <= totalPages; i++) {
//             $('.pagination').append(`
//                 <li class="page-item ${currentPage === i ? 'active' : ''}">
//                     <a class="page-link" href="#" data-page="${i}">${i}</a>
//                 </li>
//             `);
//         }

//         $('.pagination').append(`
//             <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
//                 <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
//             </li>
//         `);
//     }

//     $('#entriesPerPage').change(function() {
//         entriesPerPage = parseInt($(this).val());
//         currentPage = 1;
//         renderTable();
//     });

//     $('#searchInput').on('input', function() {
//         let searchTerm = $(this).val().toLowerCase();
//         users = allUsers.filter(user =>
//             user.name.toLowerCase().includes(searchTerm) ||
//             user.email.toLowerCase().includes(searchTerm)
//         );
//         currentPage = 1;
//         renderTable();
//     });

//     $(document).on('click', '.page-link', function(e) {
//         e.preventDefault();
//         let page = parseInt($(this).data('page'));
//         if (page > 0 && page <= Math.ceil(users.length / entriesPerPage)) {
//             currentPage = page;
//             renderTable();
//         }
//     });

//     $(document).on('click', '.delete-btn', function() {
//         if (confirm('Are you sure you want to delete this user?')) {
//             let userId = $(this).data('id');
//             allUsers = allUsers.filter(user => user.id !== userId);
//             users = [...allUsers];
//             renderTable();
//         }
//     });

//     renderTable();
// });

//history form
// $(document).ready(function() {
//     let historyEntries = [
//         { id: 1, date: "2023-04-20 10:30:00", user: "admin", action: "Upload", details: "Uploaded file: report.pdf" },
//         { id: 2, date: "2023-04-20 11:15:00", user: "john_doe", action: "Upload", details: "Uploaded file: presentation.pptx" },
//         // Add more mock history entries here
//     ];
//     let currentPage = 1;
//     let entriesPerPage = 10;

//     function renderTable() {
//         let start = (currentPage - 1) * entriesPerPage;
//         let end = start + entriesPerPage;
//         let paginatedEntries = historyEntries.slice(start, end);

//         $('#historyTableBody').empty();
//         paginatedEntries.forEach((entry, index) => {
//             $('#historyTableBody').append(`
//                 <tr>
//                     <td>${start + index + 1}</td>
//                     <td>${entry.date}</td>
//                     <td>${entry.user}</td>
//                     <td>
//                         <button class="btn btn-primary btn-sm view-upload" data-id="${entry.id}">
//                             View Upload
//                         </button>
//                     </td>
//                 </tr>
//             `);
//         });

//         $('#showingEntries').text(`Showing ${start + 1} to ${Math.min(end, historyEntries.length)} of ${historyEntries.length} entries`);
//         renderPagination();
//     }

//     function renderPagination() {
//         let totalPages = Math.ceil(historyEntries.length / entriesPerPage);
//         $('#pagination').empty();

//         $('#pagination').append(`
//             <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
//                 <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>
//             </li>
//         `);

//         for (let i = 1; i <= totalPages; i++) {
//             $('#pagination').append(`
//                 <li class="page-item ${currentPage === i ? 'active' : ''}">
//                     <a class="page-link" href="#" data-page="${i}">${i}</a>
//                 </li>
//             `);
//         }

//         $('#pagination').append(`
//             <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
//                 <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
//             </li>
//         `);
//     }

//     $('#entriesPerPage').change(function() {
//         entriesPerPage = parseInt($(this).val());
//         currentPage = 1;
//         renderTable();
//     });

//     $('#searchInput').on('input', function() {
//         let searchTerm = $(this).val().toLowerCase();
//         historyEntries = historyEntries.filter(entry =>
//             entry.user.toLowerCase().includes(searchTerm) ||
//             entry.action.toLowerCase().includes(searchTerm) ||
//             entry.details.toLowerCase().includes(searchTerm)
//         );
//         currentPage = 1;
//         renderTable();
//     });

//     $(document).on('click', '.page-link', function(e) {
//         e.preventDefault();
//         currentPage = parseInt($(this).data('page'));
//         renderTable();
//     });

//     $(document).on('click', '.view-upload', function() {
//         let entryId = $(this).data('id');
//         let entry = historyEntries.find(e => e.id === entryId);
//         if (entry) {
//             $('#uploadDetailsBody').html(`
//                 <p><strong>Date:</strong> ${entry.date}</p>
//                 <p><strong>User:</strong> ${entry.user}</p>
//                 <p><strong>Action:</strong> ${entry.action}</p>
//                 <p><strong>Details:</strong> ${entry.details}</p>
//             `);
//             $('#uploadDetailsModal').modal('show');
//         }
//     });

//     renderTable();
// });
