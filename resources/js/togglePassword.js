document.querySelectorAll(".toggle-password").forEach((toggle) => {
    toggle.addEventListener("click", function () {
        const targetInput = document.getElementById(this.dataset.target);
        const isPassword = targetInput.type === "password";
        targetInput.type = isPassword ? "text" : "password";
        this.innerHTML = isPassword
            ? `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                <path d="M13.359 11.238C11.8 12.636 9.958 13.5 8 13.5c-3.314 0-6-3-6-3s.64-.887 1.877-1.877l.708.708C3.12 10.32 3.654 10.914 4.5 11.5a6.995 6.995 0 0 0 1.659-.938l.742.742a8.05 8.05 0 0 1-1.989.759C4.16 11.514 4 11.293 4 11.293s.383-.504.896-.896l.708.708c.51-.244 1.07-.533 1.703-.832l.837.837c-.492.183-.992.323-1.5.5A6.985 6.985 0 0 0 8 13.5a6.98 6.98 0 0 0 3.64-1.262zM12.707 11c.512.392.893.896.893.896s-.12-.221-.793-.793a8.073 8.073 0 0 1 1.989-.759C12.516 9.152 12 9 12 9s.383-.504.896-.896l.708.708c-.51-.244-1.07-.533-1.703-.832l.837.837c-.492.183-.992.323-1.5.5A6.985 6.985 0 0 0 8 13.5a6.98 6.98 0 0 0 3.64-1.262z"/>
              </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
              </svg>`;
    });
});

document.querySelectorAll(".toggle-confirm-password").forEach((toggle) => {
    toggle.addEventListener("click", function () {
        const targetInput = document.getElementById(this.dataset.target);
        const isPassword = targetInput.type === "password";
        targetInput.type = isPassword ? "text" : "password";
        this.innerHTML = isPassword
            ? `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                <path d="M13.359 11.238C11.8 12.636 9.958 13.5 8 13.5c-3.314 0-6-3-6-3s.64-.887 1.877-1.877l.708.708C3.12 10.32 3.654 10.914 4.5 11.5a6.995 6.995 0 0 0 1.659-.938l.742.742a8.05 8.05 0 0 1-1.989.759C4.16 11.514 4 11.293 4 11.293s.383-.504.896-.896l.708.708c.51-.244 1.07-.533 1.703-.832l.837.837c-.492.183-.992.323-1.5.5A6.985 6.985 0 0 0 8 13.5a6.98 6.98 0 0 0 3.64-1.262zM12.707 11c.512.392.893.896.893.896s-.12-.221-.793-.793a8.073 8.073 0 0 1 1.989-.759C12.516 9.152 12 9 12 9s.383-.504.896-.896l.708.708c-.51-.244-1.07-.533-1.703-.832l.837.837c-.492.183-.992.323-1.5.5A6.985 6.985 0 0 0 8 13.5a6.98 6.98 0 0 0 3.64-1.262z"/>
              </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
              </svg>`;
    });
});
