const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '7df8b3d61emsh836d305d927e5cbp1d6d13jsncbc836fc3f46',
		'X-RapidAPI-Host': 'indian-pharmacy-chemists-and-drugstores.p.rapidapi.com'
	}
};

fetch('https://indian-pharmacy-chemists-and-drugstores.p.rapidapi.com/chemist/1', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));