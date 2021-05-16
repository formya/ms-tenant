
let instance = axios.create({
   baseURL: '/',
   timeout: 15000,
   headers: {
      'Content-Type': 'application/json',
      'x-platform': 'WEB',
   },
   withCredentials: true
})
instance.interceptors.request.use((config) => {
   let csrfToken = document.querySelector('meta[name="csrf-token"]').content
   console.log('csrfToken', csrfToken)
   return config
})

instance.interceptors.response.use((response) => {
   return response;
}, (error) => {
   if (error.response && error.response.status === 401) {
      localStorage.clear()
      window.location.href = '/'
   } else {
      return Promise.reject(error);
   }
});

export default instance
