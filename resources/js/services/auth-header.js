export function authHeader() {
    // Get token from localStorage
    const token = localStorage.getItem('token');
    
    // Return authorization header with token if it exists
    if (token) {
        return {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };
    }
    
    // Return default headers if no token
    return {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    };
}

// Helper function to check if user is authenticated
export function isAuthenticated() {
    return !!localStorage.getItem('token');
}

// Helper function to get token
export function getToken() {
    return localStorage.getItem('token');
}

// Helper function to set token
export function setToken(token) {
    localStorage.setItem('token', token);
}

// Helper function to remove token
export function removeToken() {
    localStorage.removeItem('token');
} 