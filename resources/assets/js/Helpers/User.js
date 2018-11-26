import Token from "./Token";
import AppStorage from "./AppStorage";

class User {
    login(data) {
        var path = "http://localhost:8888/Forum-App/public/";
        path += "api/auth/login";
        axios
            .post(path, data)
            .then(res => this.responseAfterLogin(res))
            .catch(error => console.log(error.response.data));
    }
    responseAfterLogin(res) {
        const access_token = res.data.access_token;
        const username = res.data.user;
        console.log(username);
        if (Token.isValid(access_token)) {
            AppStorage.store(username, access_token);
        }
    }
}

export default (User = new User());
