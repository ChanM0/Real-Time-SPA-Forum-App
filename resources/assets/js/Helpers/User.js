class User {
    login(data) {
        var path = "http://localhost:8888/Forum-App/public/";
        path += "api/auth/login";
        axios
            .post(path, data)
            .then(res => console.log(res.data))
            .catch(error => console.log(error.response.data));
    }
}

export default (User = new User());
