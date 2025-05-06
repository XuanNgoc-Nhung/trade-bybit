<template>
    <div class="card">
        <!-- Search Form -->
        <div class="card-body">
            <form class="row g-3 mb-3">
                <div class="col-auto">
                    <label class="form-label">Tìm kiếm</label>
                    <input type="text" class="form-control" v-model="searchForm.search" placeholder="Tên hoặc email"
                        @keyup.enter="handleSearch">
                </div>
                <div class="col-auto align-self-end">
                    <button type="button" class="btn btn-primary" @click="handleSearch">Tìm kiếm</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="80">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" width="200" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.created_at }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary me-2" @click="handleEdit(user)">Sửa</button>
                                <button class="btn btn-sm btn-danger" @click="handleDelete(user)">Xóa</button>
                            </td>
                        </tr>
                        <tr v-if="users.length === 0">
                            <td colspan="5" class="text-center">Không có dữ liệu</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-3">
                <ul class="pagination justify-content-end">
                    <li class="page-item" :class="{ disabled: currentPage === 1 }">
                        <a class="page-link" href="#" @click.prevent="handleCurrentChange(currentPage - 1)">Trước</a>
                    </li>
                    <li class="page-item" v-for="page in Math.ceil(total / pageSize)" :key="page"
                        :class="{ active: currentPage === page }">
                        <a class="page-link" href="#" @click.prevent="handleCurrentChange(page)">{{ page }}</a>
                    </li>
                    <li class="page-item" :class="{ disabled: currentPage === Math.ceil(total / pageSize) }">
                        <a class="page-link" href="#" @click.prevent="handleCurrentChange(currentPage + 1)">Sau</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Modal thêm/sửa người dùng -->
        <div class="modal fade" :class="{ show: dialogVisible }" v-if="dialogVisible" tabindex="-1"
            style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ dialogType === 'add' ? 'Thêm người dùng' : 'Sửa người dùng' }}</h5>
                        <button type="button" class="btn-close" @click="dialogVisible = false"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Tên</label>
                                <input type="text" class="form-control" v-model="form.name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" v-model="form.email">
                            </div>
                            <div class="mb-3" v-if="dialogType === 'add'">
                                <label class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" v-model="form.password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="dialogVisible = false">Hủy</button>
                        <button type="button" class="btn btn-primary" @click="handleSubmit">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade" :class="{ show: dialogVisible }" v-if="dialogVisible"></div>
    </div>
</template>

<script>
import { ElMessage, ElMessageBox } from 'element-plus';
import api from '../services/api';

export default {
    data() {
        return {
            users: [],
            loading: false,
            dialogVisible: false,
            dialogType: 'add',
            form: {
                id: null,
                name: '',
                email: '',
                password: ''
            },
            // Search and pagination
            searchForm: {
                search: ''
            },
            currentPage: 1,
            pageSize: 10,
            total: 0
        }
    },

    methods: {
        async fetchUsers() {
            this.loading = true;
            try {
                let params = {
                    start: (this.currentPage - 1) * this.pageSize,
                    limit: this.pageSize,
                    key: this.searchForm.search
                };
                const response = await api.post('/admin/users/list', params);
                this.users = response.data ?? [];
                this.total = response.total ?? 0;
                // Hiển thị thông báo từ backend nếu có
                if (response.msg) {
                    ElMessage({
                        message: response.msg,
                        type: response.status ? 'success' : 'error'
                    });
                }
            } catch (error) {
                // Error is already handled by api service
            }
            this.loading = false;
        },

        handleSearch() {
            this.currentPage = 1;
            this.fetchUsers();
        },

        handleSizeChange(val) {
            this.pageSize = val;
            this.fetchUsers();
        },

        handleCurrentChange(val) {
            this.currentPage = val;
            this.fetchUsers();
        },

        handleAdd() {
            this.dialogType = 'add';
            this.form = {
                id: null,
                name: '',
                email: '',
                password: ''
            };
            this.dialogVisible = true;
        },

        handleEdit(row) {
            this.dialogType = 'edit';
            this.form = { ...row };
            this.dialogVisible = true;
        },

        async handleDelete(row) {
            try {
                await ElMessageBox.confirm('Bạn có chắc chắn muốn xóa người dùng này?', 'Cảnh báo', {
                    confirmButtonText: 'Xác nhận',
                    cancelButtonText: 'Hủy',
                    type: 'warning',
                });

                await api.delete(`/api/users/${row.id}`);
                ElMessage.success('Xóa người dùng thành công');
                this.fetchUsers();
            } catch (error) {
                if (error !== 'cancel') {
                    // Error is already handled by api service
                }
            }
        },

        async handleSubmit() {
            try {
                if (this.dialogType === 'add') {
                    await api.post('/api/users', this.form);
                    ElMessage.success('Thêm người dùng thành công');
                } else {
                    await api.put(`/api/users/${this.form.id}`, this.form);
                    ElMessage.success('Cập nhật người dùng thành công');
                }
                this.dialogVisible = false;
                this.fetchUsers();
            } catch (error) {
                // Error is already handled by api service
            }
        }
    },

    mounted() {
        this.fetchUsers();
    }
}
</script>

<style scoped>
.modal {
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-backdrop {
    opacity: 0.5;
}

.table {
    margin-bottom: 0;
}

.table th {
    background-color: #f8f9fa;
}

.pagination {
    margin-bottom: 0;
}
</style>