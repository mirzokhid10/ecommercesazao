import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Echo from "laravel-echo";

import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: PUSHER.key,
    cluster: PUSHER.cluster ?? "mt1",
    wsHost: `ws-${PUSHER.cluster}.pusher.com`,
    forceTLS: true,
});

// window.Echo = new Echo({
//     broadcaster: "pusher",
//     key: import.meta.env.VITE_REVERB_APP_KEY,
//     wsHost: import.meta.env.VITE_REVERB_HOST,
//     wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
//     wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? "https") === "https",
//     enabledTransports: ["ws", "wss"],
// });
