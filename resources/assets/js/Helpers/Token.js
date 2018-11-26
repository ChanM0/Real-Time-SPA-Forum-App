class Token {
    isValid(token) {
        const payload = this.payload(token);

        const api_auth_login =
            "http://localhost:8888/Forum-App/public/api/auth/login";
        const api_auth_signup =
            "http://localhost:8888/Forum-App/public/api/auth/signup";

        if (payload) {
            var login = payload.iss == api_auth_signup;
            var signup = payload.iss == api_auth_login;

            return login || signup ? true : false;
        }

        return false;
    }
    payload(token) {
        const payload = token.split(".")[1];
        return this.decode(payload);
    }

    decode(payload) {
        return JSON.parse(atob(payload));
    }
}
export default (Token = new Token());
