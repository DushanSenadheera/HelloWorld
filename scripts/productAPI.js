const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '7df8b3d61emsh836d305d927e5cbp1d6d13jsncbc836fc3f46',
		'X-RapidAPI-Host': 'myhealthbox.p.rapidapi.com'
	}
};

fetch('https://myhealthbox.p.rapidapi.com/search/fulltext?q=aspirin&c=us&l=en&limit=10&from=0', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));