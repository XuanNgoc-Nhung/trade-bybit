import axios from 'axios';
import { authHeader } from './auth-header';
import { ElMessage } from 'element-plus';

const BASE_URL_API = process.env.MIX_API_URL || '';

export default {
    DEFAULT_TIME_OUT: 60000,

    async post(url, params, timeout = this.DEFAULT_TIME_OUT) {
        try {
            const config = {
                timeout,
                headers: authHeader()
            };
            const response = await axios.post(url, params, config);
            return response.data;
        } catch (error) {
            this.handleError(error);
            throw error;
        }
    },

    async put(url, params, timeout = this.DEFAULT_TIME_OUT) {
        try {
            const config = {
                timeout,
                headers: authHeader()
            };
            const response = await axios.put(url, params, config);
            return response.data;
        } catch (error) {
            this.handleError(error);
            throw error;
        }
    },

    async patch(url, params, timeout = this.DEFAULT_TIME_OUT) {
        try {
            const config = {
                timeout,
                headers: authHeader()
            };
            const response = await axios.patch(url, params, config);
            return response.data;
        } catch (error) {
            this.handleError(error);
            throw error;
        }
    },

    async get(url, params = {}, timeout = this.DEFAULT_TIME_OUT) {
        try {
            const config = {
                timeout,
                headers: authHeader()
            };
            const queryString = this.objectToQueryString(params);
            const fullUrl = queryString ? `${url}?${queryString}` : url;
            const response = await axios.get(fullUrl, config);
            return response.data;
        } catch (error) {
            this.handleError(error);
            throw error;
        }
    },

    async delete(url, params = {}, timeout = this.DEFAULT_TIME_OUT) {
        try {
            const config = {
                timeout,
                headers: authHeader()
            };
            const queryString = this.objectToQueryString(params);
            const fullUrl = queryString ? `${url}?${queryString}` : url;
            const response = await axios.delete(fullUrl, config);
            return response.data;
        } catch (error) {
            this.handleError(error);
            throw error;
        }
    },

    objectToQueryString(obj) {
        return Object.entries(obj)
            .filter(([_, value]) => value !== undefined && value !== null)
            .map(([key, value]) => `${encodeURIComponent(key)}=${encodeURIComponent(value)}`)
            .join('&');
    },

    handleError(error) {
        if (error.response) {
            // Server responded with error status
            const message = error.response.data?.message || 'Có lỗi xảy ra';
            ElMessage.error(message);
        } else if (error.request) {
            // Request was made but no response received
            ElMessage.error('Không thể kết nối đến máy chủ');
        } else {
            // Something else happened
            ElMessage.error('Có lỗi xảy ra');
        }
    }
}; 