!(function (e, t) {
    "object" == typeof exports && "object" == typeof module ? (module.exports = t()) : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? (exports.thaanaKeyboard = t()) : (e.thaanaKeyboard = t());
})(window, function () {
    return (function (e) {
        var t = {};
        function n(r) {
            if (t[r]) return t[r].exports;
            var o = (t[r] = { i: r, l: !1, exports: {} });
            return e[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
        }
        return (
            (n.m = e),
                (n.c = t),
                (n.d = function (e, t, r) {
                    n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
                }),
                (n.r = function (e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                }),
                (n.t = function (e, t) {
                    if ((1 & t && (e = n(e)), 8 & t)) return e;
                    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                    var r = Object.create(null);
                    if ((n.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e));
                        for (var o in e)
                            n.d(
                                r,
                                o,
                                function (t) {
                                    return e[t];
                                }.bind(null, o)
                            );
                    return r;
                }),
                (n.n = function (e) {
                    var t =
                        e && e.__esModule
                            ? function () {
                            return e.default;
                        }
                            : function () {
                            return e;
                        };
                    return n.d(t, "a", t), t;
                }),
                (n.o = function (e, t) {
                    return Object.prototype.hasOwnProperty.call(e, t);
                }),
                (n.p = ""),
                n((n.s = 0))
        );
    })([
        function (e, t) {
            const n = {
                q: "??",
                w: "??",
                e: "??",
                r: "??",
                t: "??",
                y: "??",
                u: "??",
                i: "??",
                o: "??",
                p: "??",
                a: "??",
                s: "??",
                d: "??",
                f: "??",
                g: "??",
                h: "??",
                j: "??",
                k: "??",
                l: "??",
                z: "??",
                x: "??",
                c: "??",
                v: "??",
                b: "??",
                n: "??",
                m: "??",
                Q: "??",
                W: "??",
                E: "??",
                R: "??",
                T: "??",
                Y: "??",
                U: "??",
                I: "??",
                O: "??",
                P: "??",
                A: "??",
                S: "??",
                D: "??",
                F: "???",
                G: "??",
                H: "??",
                J: "??",
                K: "??",
                L: "??",
                Z: "??",
                X: "??",
                C: "??",
                V: "??",
                B: "??",
                N: "??",
                M: "??",
                ",": "??",
                ";": "??",
                "?": "??",
                "<": ">",
                ">": "<",
                "[": "]",
                "]": "[",
                "(": ")",
                ")": "(",
                "{": "}",
                "}": "{",
            };
            let r,
                o,
                u,
                a,
                i,
                l = document.querySelector(".thaana-keyboard");
            l.addEventListener("input", function (e) {
                let t = "Unidentified" === a ? e.data : a;
                null !== t && (t = t.substring(t.length - 1)),
                -1 === ["Spacebar", "Backspace"].indexOf(t) &&
                null !== e.data &&
                (t === e.target.value && (t = e.target.value.split(r).join("")),
                    (e.target.value = r.split(e.target.value).join("")),
                    (function (e, t) {
                        let r = e.target,
                            a = n[t] || t;
                        o !== u && (r.value = r.value.substring(0, o) + r.value.substring(u)), (r.value = r.value.substring(0, o) + a + r.value.substring(o)), (r.selectionStart = o + 1), (r.selectionEnd = o + 1);
                    })(e, t)),
                i - e.target.value.length > 1 && o === u && (e.target.value = r.substring(0, i - 1));
            }),
                l.addEventListener("keydown", function (e) {
                    (a = e.key), (r = e.target.value), (o = e.target.selectionStart), (u = e.target.selectionEnd), (i = e.target.value.length);
                });
        },
    ]);
});
