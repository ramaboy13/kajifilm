<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center" style="display: none;">
    <div class="bg-black bg-opacity-50 absolute inset-0" onclick="closeDeleteModal()"></div>
    <div class="bg-white p-6 rounded-lg z-10">
        <h2 class="text-xl font-bold mb-4">Konfirmasi Penghapusan</h2>
        <p>Apakah Anda yakin ingin menghapus film ini?</p>
        <div class="mt-4 flex justify-end space-x-2">
            <button class="btn btn-secondary" onclick="closeDeleteModal()">Batal</button>
            <form id="deleteForm" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>

<script>
    function openDeleteModal(id) {
        const form = document.getElementById('deleteForm');
        form.action = `/admin/proses-delete-film/${id}`;
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }
</script>
