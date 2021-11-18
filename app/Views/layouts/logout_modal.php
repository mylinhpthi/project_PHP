<div class="modal fade" id="logoutModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sign Out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <divider />
            <div class="modal-body">
                <!-- Form submit để xoá Ward có ID được submit bởi POST -->
                <h5 class="text-secondary">Are you sure log out?</h5>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal" style="color:currentColor;">
                     Cancel
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" style="color:currentColor;" onclick="logout(event)">
                    Logout
                </button>
            </div>
        </div>
    </div>
</div>

<form action="/logout" method="POST" id="logoutForm">
    <!-- additional paramters here -->
</form>

<script>
    function logout(e) {
        let form = document.getElementById('logoutForm');
        form.submit();
    }
</script>