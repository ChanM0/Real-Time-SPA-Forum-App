import Token from "./Token";

class User {
    login(data) {
        var path = "http://localhost:8888/Forum-App/public/";
        path += "api/auth/login";
        axios
            .post(path, data)
            .then(res => {
                Token.payload(res.data.access_token);
            })
            .catch(error => console.log(error.response.data));
    }
}

export default (User = new User());
