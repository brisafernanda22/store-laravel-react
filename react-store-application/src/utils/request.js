const baseUrl = 'http://localhost:8000/api';

const fetchPersonal = (endpoint, data, method = 'GET') => {
  const url = `${baseUrl}${endpoint}`

  if (method === 'GET') {
    return fetch(url)
  }
  return fetch(url, {
    method,
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data),
  })
}



export { fetchPersonal }
