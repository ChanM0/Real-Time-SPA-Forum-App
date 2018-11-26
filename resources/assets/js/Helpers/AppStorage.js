class AppStorage {
    storeToken(token) {
        var bool = localStorage.setItem("token", token);
        console.log("hello there");
    }

    storeUser(user) {
        localStorage.setItem("user", user);
    }

    store(user, token) {
        this.storeToken(token);
        this.storeUser(user);
    }

    clear() {
        localStorage.removeItem("token");
        localStorage.removeItem("user");
    }

    getToken() {
        return localStorage.getItem("token");
    }

    getUser() {
        return localStorage.getItem("user");
    }
}

export default (AppStorage = new AppStorage());
