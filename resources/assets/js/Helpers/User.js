import Token from "./Token";
import AppStorage from "./AppStorage";

class User {
    login(data) {
        var path = "http://localhost:8000/";
        path += "api/auth/login";
        axios
            .post(path, data)
            .then(res => this.responseAfterLogin(res))
            .catch(error => console.log(error.response));
    }
    responseAfterLogin(res) {
        const access_token = res.data.access_token;
        const username = res.data.user;

        if (Token.isValid(access_token)) {
            AppStorage.store(username, access_token);
            window.location = "/forum";
        }
    }

    hasToken() {
        const storedToken = AppStorage.getToken();
        if (storedToken) {
            return Token.isValid(storedToken) ? true : false;
        }
        return false;
    }

    loggedin() {
        return this.hasToken();
    }

    logout() {
        AppStorage.clear();
        window.location = "/";
    }

    name() {
        if (this.loggedin()) {
            return AppStorage.getUser();
        }
    }

    id() {
        if (this.loggedin()) {
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub;
        }
    }
}

export default (User = new User());
