define("appSrc/include/index/aboutUs", ["jquery", "appCommon"], function(a, b) {
	return a("#js_xy_aboutus").length ? void b(function() {
		function b() {
			"#/about_us" == location.href.substring(location.href.indexOf("#")) ? (d.add(e).add(f).add(g).hide(), c.show(), h.find("li").removeClass("on").eq(0).addClass("on"), h.find("li").eq(0).html('<a href="#about_us" title="关于我们">关于我们</a>')) : "#/about_us_en" == location.href.substring(location.href.indexOf("#")) ? (c.add(f).add(g).hide(), d.show(), h.find("li").removeClass("on").eq(0).addClass("on"), h.find("li").eq(0).html('<a href="#about_us_en" title="About Us">About Us</a>')) : "#/contact" == location.href.substring(location.href.indexOf("#")) ? (c.add(d).add(f).add(g).hide(), e.show(), h.find("li").removeClass("on").eq(1).addClass("on")) : "#/join_us" == location.href.substring(location.href.indexOf("#")) ? (c.add(d).add(e).add(g).hide(), f.show(), h.find("li").removeClass("on").eq(2).addClass("on")) : "#/question" == location.href.substring(location.href.indexOf("#")) ? (c.add(d).add(e).add(f).hide(), g.show(), h.find("li").removeClass("on").eq(3).addClass("on")) : (e.add(d).add(f).add(g).hide(), c.show(), h.find("li").removeClass("on").eq(0).addClass("on"))
		}
		var c = a("#about_us"),
			d = a("#about_us_en"),
			e = a("#contact"),
			f = a("#join_us"),
			g = a("#question"),
			h = a("#a_nav");
		b(), a(window).on("hashchange", b)
	}) : !1
}), define("appSrc/include/index/androidDownload", ["jquery", "analyse", "footer", "userTrack"], function(a, b) {
	if (!a("#js_xy_client_down").length) return !1;
	var c = a("#img_play"),
		d = c.find("ul").eq(0),
		e = a(".download_app_ios").find("article");
	$width = c.width(), $btn = a("#btn_d").find("a"), $num = 0, $colors = new Array("e2d7ce", "fbd06a", "fca179", "c2a6d5"), $btn.on("click", function() {
		$num = a(this).addClass("on").siblings().removeClass("on").end().index(), e.css("background-color", "#" + $colors[$num]), d.css("left", -$num * $width)
	});
	var f = setInterval(function() {
		$btn.eq($num).trigger("click"), $num = ($num + 1) % $btn.length
	}, 5e3);
	c.on({
		mouseenter: function() {
			clearTimeout(f)
		},
		mouseleave: function() {
			f = setInterval(function() {
				$btn.eq($num).trigger("click"), $num = ($num + 1) % $btn.length
			}, 5e3)
		}
	}), setTimeout(b, 10)
}), define("appSrc/include/index/consociationSchool", ["jquery", "support/transitionend", "appCommon"], function(a, b, c) {
	return a("#js_xy_consociation_school").length ? (b(), void c(function() {
		var b = a("#banner"),
			c = b.find("ul").eq(0),
			d = c.find("li"),
			e = b.find(".txt"),
			f = "<ol>",
			g = a.support.transition,
			h = 0,
			i = ["transitionend", "webkitTransitionEnd", "MSTransitionEnd", "oTransitionEnd"],
			j = parseInt(b.width());
		c.width(d.length * j), d.width(j), a(window).on("resize", function() {
			j = parseInt(b.width()), c.width(d.length * j), d.width(j)
		}), d.each(function() {
			var b = a(this);
			b.css("background", "url(" + b.data("img") + ") no-repeat 50% 50%"), f += "<li></li>"
		}), f += "</ol>";
		var k = a(f).appendTo(b).find("li").eq(0).addClass("on").end().on("click", function() {
			var b = a(this);
			h = b.index(), c.css("left", -h * j), b.addClass("on").siblings().removeClass("on")
		});
		if (g) for (var l = 0, m = i.length; m > l; l++) c[0].addEventListener(i[l], function() {
			e.removeClass("txt_on").eq(h).addClass("txt_on")
		}, !1);
		else e.addClass("txt_on");
		var n = function() {
				h = (h + 1) % k.length, k.eq(h).trigger("click")
			},
			o = 8e3,
			p = setInterval(n, o);
		b.on({
			mouseenter: function() {
				clearInterval(p)
			},
			mouseleave: function() {
				p = setInterval(n, o)
			}
		}), a(function() {
			b.css("visibility", "visible")
		})
	})) : !1
}), define("moment", ["require", "exports", "module"], function(a, b, c) {
	(function(b) {
		function d(a, b, c) {
			switch (arguments.length) {
			case 2:
				return null != a ? a : b;
			case 3:
				return null != a ? a : null != b ? b : c;
			default:
				throw new Error("Implement me")
			}
		}
		function e() {
			return {
				empty: !1,
				unusedTokens: [],
				unusedInput: [],
				overflow: -2,
				charsLeftOver: 0,
				nullInput: !1,
				invalidMonth: null,
				invalidFormat: !1,
				userInvalidated: !1,
				iso: !1
			}
		}
		function f(a) {
			ta.suppressDeprecationWarnings === !1 && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + a)
		}
		function g(a, b) {
			var c = !0;
			return n(function() {
				return c && (f(a), c = !1), b.apply(this, arguments)
			}, b)
		}
		function h(a, b) {
			pb[a] || (f(b), pb[a] = !0)
		}
		function i(a, b) {
			return function(c) {
				return q(a.call(this, c), b)
			}
		}
		function j(a, b) {
			return function(c) {
				return this.localeData().ordinal(a.call(this, c), b)
			}
		}
		function k() {}
		function l(a, b) {
			b !== !1 && G(a), o(this, a), this._d = new Date(+a._d)
		}
		function m(a) {
			var b = z(a),
				c = b.year || 0,
				d = b.quarter || 0,
				e = b.month || 0,
				f = b.week || 0,
				g = b.day || 0,
				h = b.hour || 0,
				i = b.minute || 0,
				j = b.second || 0,
				k = b.millisecond || 0;
			this._milliseconds = +k + 1e3 * j + 6e4 * i + 36e5 * h, this._days = +g + 7 * f, this._months = +e + 3 * d + 12 * c, this._data = {}, this._locale = ta.localeData(), this._bubble()
		}
		function n(a, b) {
			for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c]);
			return b.hasOwnProperty("toString") && (a.toString = b.toString), b.hasOwnProperty("valueOf") && (a.valueOf = b.valueOf), a
		}
		function o(a, b) {
			var c, d, e;
			if ("undefined" != typeof b._isAMomentObject && (a._isAMomentObject = b._isAMomentObject), "undefined" != typeof b._i && (a._i = b._i), "undefined" != typeof b._f && (a._f = b._f), "undefined" != typeof b._l && (a._l = b._l), "undefined" != typeof b._strict && (a._strict = b._strict), "undefined" != typeof b._tzm && (a._tzm = b._tzm), "undefined" != typeof b._isUTC && (a._isUTC = b._isUTC), "undefined" != typeof b._offset && (a._offset = b._offset), "undefined" != typeof b._pf && (a._pf = b._pf), "undefined" != typeof b._locale && (a._locale = b._locale), Ha.length > 0) for (c in Ha) d = Ha[c], e = b[d], "undefined" != typeof e && (a[d] = e);
			return a
		}
		function p(a) {
			return 0 > a ? Math.ceil(a) : Math.floor(a)
		}
		function q(a, b, c) {
			for (var d = "" + Math.abs(a), e = a >= 0; d.length < b;) d = "0" + d;
			return (e ? c ? "+" : "" : "-") + d
		}
		function r(a, b) {
			var c = {
				milliseconds: 0,
				months: 0
			};
			return c.months = b.month() - a.month() + 12 * (b.year() - a.year()), a.clone().add(c.months, "M").isAfter(b) && --c.months, c.milliseconds = +b - +a.clone().add(c.months, "M"), c
		}
		function s(a, b) {
			var c;
			return b = L(b, a), a.isBefore(b) ? c = r(a, b) : (c = r(b, a), c.milliseconds = -c.milliseconds, c.months = -c.months), c
		}
		function t(a, b) {
			return function(c, d) {
				var e, f;
				return null === d || isNaN(+d) || (h(b, "moment()." + b + "(period, number) is deprecated. Please use moment()." + b + "(number, period)."), f = c, c = d, d = f), c = "string" == typeof c ? +c : c, e = ta.duration(c, d), u(this, e, a), this
			}
		}
		function u(a, b, c, d) {
			var e = b._milliseconds,
				f = b._days,
				g = b._months;
			d = null == d ? !0 : d, e && a._d.setTime(+a._d + e * c), f && na(a, "Date", ma(a, "Date") + f * c), g && la(a, ma(a, "Month") + g * c), d && ta.updateOffset(a, f || g)
		}
		function v(a) {
			return "[object Array]" === Object.prototype.toString.call(a)
		}
		function w(a) {
			return "[object Date]" === Object.prototype.toString.call(a) || a instanceof Date
		}
		function x(a, b, c) {
			var d, e = Math.min(a.length, b.length),
				f = Math.abs(a.length - b.length),
				g = 0;
			for (d = 0; e > d; d++)(c && a[d] !== b[d] || !c && B(a[d]) !== B(b[d])) && g++;
			return g + f
		}
		function y(a) {
			if (a) {
				var b = a.toLowerCase().replace(/(.)s$/, "$1");
				a = ib[a] || jb[b] || b
			}
			return a
		}
		function z(a) {
			var b, c, d = {};
			for (c in a) a.hasOwnProperty(c) && (b = y(c), b && (d[b] = a[c]));
			return d
		}
		function A(a) {
			var c, d;
			if (0 === a.indexOf("week")) c = 7, d = "day";
			else {
				if (0 !== a.indexOf("month")) return;
				c = 12, d = "month"
			}
			ta[a] = function(e, f) {
				var g, h, i = ta._locale[a],
					j = [];
				if ("number" == typeof e && (f = e, e = b), h = function(a) {
					var b = ta().utc().set(d, a);
					return i.call(ta._locale, b, e || "")
				}, null != f) return h(f);
				for (g = 0; c > g; g++) j.push(h(g));
				return j
			}
		}
		function B(a) {
			var b = +a,
				c = 0;
			return 0 !== b && isFinite(b) && (c = b >= 0 ? Math.floor(b) : Math.ceil(b)), c
		}
		function C(a, b) {
			return new Date(Date.UTC(a, b + 1, 0)).getUTCDate()
		}
		function D(a, b, c) {
			return ha(ta([a, 11, 31 + b - c]), b, c).week
		}
		function E(a) {
			return F(a) ? 366 : 365
		}
		function F(a) {
			return a % 4 === 0 && a % 100 !== 0 || a % 400 === 0
		}
		function G(a) {
			var b;
			a._a && -2 === a._pf.overflow && (b = a._a[Aa] < 0 || a._a[Aa] > 11 ? Aa : a._a[Ba] < 1 || a._a[Ba] > C(a._a[za], a._a[Aa]) ? Ba : a._a[Ca] < 0 || a._a[Ca] > 23 ? Ca : a._a[Da] < 0 || a._a[Da] > 59 ? Da : a._a[Ea] < 0 || a._a[Ea] > 59 ? Ea : a._a[Fa] < 0 || a._a[Fa] > 999 ? Fa : -1, a._pf._overflowDayOfYear && (za > b || b > Ba) && (b = Ba), a._pf.overflow = b)
		}
		function H(a) {
			return null == a._isValid && (a._isValid = !isNaN(a._d.getTime()) && a._pf.overflow < 0 && !a._pf.empty && !a._pf.invalidMonth && !a._pf.nullInput && !a._pf.invalidFormat && !a._pf.userInvalidated, a._strict && (a._isValid = a._isValid && 0 === a._pf.charsLeftOver && 0 === a._pf.unusedTokens.length)), a._isValid
		}
		function I(a) {
			return a ? a.toLowerCase().replace("_", "-") : a
		}
		function J(a) {
			for (var b, c, d, e, f = 0; f < a.length;) {
				for (e = I(a[f]).split("-"), b = e.length, c = I(a[f + 1]), c = c ? c.split("-") : null; b > 0;) {
					if (d = K(e.slice(0, b).join("-"))) return d;
					if (c && c.length >= b && x(e, c, !0) >= b - 1) break;
					b--
				}
				f++
			}
			return null
		}
		function K(b) {
			var c = null;
			if (!Ga[b] && Ia) try {
				c = ta.locale(), a("./locale/" + b), ta.locale(c)
			} catch (d) {}
			return Ga[b]
		}
		function L(a, b) {
			return b._isUTC ? ta(a).zone(b._offset || 0) : ta(a).local()
		}
		function M(a) {
			return a.match(/\[[\s\S]/) ? a.replace(/^\[|\]$/g, "") : a.replace(/\\/g, "")
		}
		function N(a) {
			var b, c, d = a.match(Ma);
			for (b = 0, c = d.length; c > b; b++) d[b] = ob[d[b]] ? ob[d[b]] : M(d[b]);
			return function(e) {
				var f = "";
				for (b = 0; c > b; b++) f += d[b] instanceof Function ? d[b].call(e, a) : d[b];
				return f
			}
		}
		function O(a, b) {
			return a.isValid() ? (b = P(b, a.localeData()), kb[b] || (kb[b] = N(b)), kb[b](a)) : a.localeData().invalidDate()
		}
		function P(a, b) {
			function c(a) {
				return b.longDateFormat(a) || a
			}
			var d = 5;
			for (Na.lastIndex = 0; d >= 0 && Na.test(a);) a = a.replace(Na, c), Na.lastIndex = 0, d -= 1;
			return a
		}
		function Q(a, b) {
			var c, d = b._strict;
			switch (a) {
			case "Q":
				return Ya;
			case "DDDD":
				return $a;
			case "YYYY":
			case "GGGG":
			case "gggg":
				return d ? _a : Qa;
			case "Y":
			case "G":
			case "g":
				return bb;
			case "YYYYYY":
			case "YYYYY":
			case "GGGGG":
			case "ggggg":
				return d ? ab : Ra;
			case "S":
				if (d) return Ya;
			case "SS":
				if (d) return Za;
			case "SSS":
				if (d) return $a;
			case "DDD":
				return Pa;
			case "MMM":
			case "MMMM":
			case "dd":
			case "ddd":
			case "dddd":
				return Ta;
			case "a":
			case "A":
				return b._locale._meridiemParse;
			case "X":
				return Wa;
			case "Z":
			case "ZZ":
				return Ua;
			case "T":
				return Va;
			case "SSSS":
				return Sa;
			case "MM":
			case "DD":
			case "YY":
			case "GG":
			case "gg":
			case "HH":
			case "hh":
			case "mm":
			case "ss":
			case "ww":
			case "WW":
				return d ? Za : Oa;
			case "M":
			case "D":
			case "d":
			case "H":
			case "h":
			case "m":
			case "s":
			case "w":
			case "W":
			case "e":
			case "E":
				return Oa;
			case "Do":
				return Xa;
			default:
				return c = new RegExp(Z(Y(a.replace("\\", "")), "i"))
			}
		}
		function R(a) {
			a = a || "";
			var b = a.match(Ua) || [],
				c = b[b.length - 1] || [],
				d = (c + "").match(gb) || ["-", 0, 0],
				e = +(60 * d[1]) + B(d[2]);
			return "+" === d[0] ? -e : e
		}
		function S(a, b, c) {
			var d, e = c._a;
			switch (a) {
			case "Q":
				null != b && (e[Aa] = 3 * (B(b) - 1));
				break;
			case "M":
			case "MM":
				null != b && (e[Aa] = B(b) - 1);
				break;
			case "MMM":
			case "MMMM":
				d = c._locale.monthsParse(b), null != d ? e[Aa] = d : c._pf.invalidMonth = b;
				break;
			case "D":
			case "DD":
				null != b && (e[Ba] = B(b));
				break;
			case "Do":
				null != b && (e[Ba] = B(parseInt(b, 10)));
				break;
			case "DDD":
			case "DDDD":
				null != b && (c._dayOfYear = B(b));
				break;
			case "YY":
				e[za] = ta.parseTwoDigitYear(b);
				break;
			case "YYYY":
			case "YYYYY":
			case "YYYYYY":
				e[za] = B(b);
				break;
			case "a":
			case "A":
				c._isPm = c._locale.isPM(b);
				break;
			case "H":
			case "HH":
			case "h":
			case "hh":
				e[Ca] = B(b);
				break;
			case "m":
			case "mm":
				e[Da] = B(b);
				break;
			case "s":
			case "ss":
				e[Ea] = B(b);
				break;
			case "S":
			case "SS":
			case "SSS":
			case "SSSS":
				e[Fa] = B(1e3 * ("0." + b));
				break;
			case "X":
				c._d = new Date(1e3 * parseFloat(b));
				break;
			case "Z":
			case "ZZ":
				c._useUTC = !0, c._tzm = R(b);
				break;
			case "dd":
			case "ddd":
			case "dddd":
				d = c._locale.weekdaysParse(b), null != d ? (c._w = c._w || {}, c._w.d = d) : c._pf.invalidWeekday = b;
				break;
			case "w":
			case "ww":
			case "W":
			case "WW":
			case "d":
			case "e":
			case "E":
				a = a.substr(0, 1);
			case "gggg":
			case "GGGG":
			case "GGGGG":
				a = a.substr(0, 2), b && (c._w = c._w || {}, c._w[a] = B(b));
				break;
			case "gg":
			case "GG":
				c._w = c._w || {}, c._w[a] = ta.parseTwoDigitYear(b)
			}
		}
		function T(a) {
			var b, c, e, f, g, h, i;
			b = a._w, null != b.GG || null != b.W || null != b.E ? (g = 1, h = 4, c = d(b.GG, a._a[za], ha(ta(), 1, 4).year), e = d(b.W, 1), f = d(b.E, 1)) : (g = a._locale._week.dow, h = a._locale._week.doy, c = d(b.gg, a._a[za], ha(ta(), g, h).year), e = d(b.w, 1), null != b.d ? (f = b.d, g > f && ++e) : f = null != b.e ? b.e + g : g), i = ia(c, e, f, h, g), a._a[za] = i.year, a._dayOfYear = i.dayOfYear
		}
		function U(a) {
			var b, c, e, f, g = [];
			if (!a._d) {
				for (e = W(a), a._w && null == a._a[Ba] && null == a._a[Aa] && T(a), a._dayOfYear && (f = d(a._a[za], e[za]), a._dayOfYear > E(f) && (a._pf._overflowDayOfYear = !0), c = da(f, 0, a._dayOfYear), a._a[Aa] = c.getUTCMonth(), a._a[Ba] = c.getUTCDate()), b = 0; 3 > b && null == a._a[b]; ++b) a._a[b] = g[b] = e[b];
				for (; 7 > b; b++) a._a[b] = g[b] = null == a._a[b] ? 2 === b ? 1 : 0 : a._a[b];
				a._d = (a._useUTC ? da : ca).apply(null, g), null != a._tzm && a._d.setUTCMinutes(a._d.getUTCMinutes() + a._tzm)
			}
		}
		function V(a) {
			var b;
			a._d || (b = z(a._i), a._a = [b.year, b.month, b.day, b.hour, b.minute, b.second, b.millisecond], U(a))
		}
		function W(a) {
			var b = new Date;
			return a._useUTC ? [b.getUTCFullYear(), b.getUTCMonth(), b.getUTCDate()] : [b.getFullYear(), b.getMonth(), b.getDate()]
		}
		function X(a) {
			if (a._f === ta.ISO_8601) return void _(a);
			a._a = [], a._pf.empty = !0;
			var b, c, d, e, f, g = "" + a._i,
				h = g.length,
				i = 0;
			for (d = P(a._f, a._locale).match(Ma) || [], b = 0; b < d.length; b++) e = d[b], c = (g.match(Q(e, a)) || [])[0], c && (f = g.substr(0, g.indexOf(c)), f.length > 0 && a._pf.unusedInput.push(f), g = g.slice(g.indexOf(c) + c.length), i += c.length), ob[e] ? (c ? a._pf.empty = !1 : a._pf.unusedTokens.push(e), S(e, c, a)) : a._strict && !c && a._pf.unusedTokens.push(e);
			a._pf.charsLeftOver = h - i, g.length > 0 && a._pf.unusedInput.push(g), a._isPm && a._a[Ca] < 12 && (a._a[Ca] += 12), a._isPm === !1 && 12 === a._a[Ca] && (a._a[Ca] = 0), U(a), G(a)
		}
		function Y(a) {
			return a.replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function(a, b, c, d, e) {
				return b || c || d || e
			})
		}
		function Z(a) {
			return a.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
		}
		function $(a) {
			var b, c, d, f, g;
			if (0 === a._f.length) return a._pf.invalidFormat = !0, void(a._d = new Date(0 / 0));
			for (f = 0; f < a._f.length; f++) g = 0, b = o({}, a), b._pf = e(), b._f = a._f[f], X(b), H(b) && (g += b._pf.charsLeftOver, g += 10 * b._pf.unusedTokens.length, b._pf.score = g, (null == d || d > g) && (d = g, c = b));
			n(a, c || b)
		}
		function _(a) {
			var b, c, d = a._i,
				e = cb.exec(d);
			if (e) {
				for (a._pf.iso = !0, b = 0, c = eb.length; c > b; b++) if (eb[b][1].exec(d)) {
					a._f = eb[b][0] + (e[6] || " ");
					break
				}
				for (b = 0, c = fb.length; c > b; b++) if (fb[b][1].exec(d)) {
					a._f += fb[b][0];
					break
				}
				d.match(Ua) && (a._f += "Z"), X(a)
			} else a._isValid = !1
		}
		function aa(a) {
			_(a), a._isValid === !1 && (delete a._isValid, ta.createFromInputFallback(a))
		}
		function ba(a) {
			var c, d = a._i;
			d === b ? a._d = new Date : w(d) ? a._d = new Date(+d) : null !== (c = Ja.exec(d)) ? a._d = new Date(+c[1]) : "string" == typeof d ? aa(a) : v(d) ? (a._a = d.slice(0), U(a)) : "object" == typeof d ? V(a) : "number" == typeof d ? a._d = new Date(d) : ta.createFromInputFallback(a)
		}
		function ca(a, b, c, d, e, f, g) {
			var h = new Date(a, b, c, d, e, f, g);
			return 1970 > a && h.setFullYear(a), h
		}
		function da(a) {
			var b = new Date(Date.UTC.apply(null, arguments));
			return 1970 > a && b.setUTCFullYear(a), b
		}
		function ea(a, b) {
			if ("string" == typeof a) if (isNaN(a)) {
				if (a = b.weekdaysParse(a), "number" != typeof a) return null
			} else a = parseInt(a, 10);
			return a
		}
		function fa(a, b, c, d, e) {
			return e.relativeTime(b || 1, !! c, a, d)
		}
		function ga(a, b, c) {
			var d = ta.duration(a).abs(),
				e = ya(d.as("s")),
				f = ya(d.as("m")),
				g = ya(d.as("h")),
				h = ya(d.as("d")),
				i = ya(d.as("M")),
				j = ya(d.as("y")),
				k = e < lb.s && ["s", e] || 1 === f && ["m"] || f < lb.m && ["mm", f] || 1 === g && ["h"] || g < lb.h && ["hh", g] || 1 === h && ["d"] || h < lb.d && ["dd", h] || 1 === i && ["M"] || i < lb.M && ["MM", i] || 1 === j && ["y"] || ["yy", j];
			return k[2] = b, k[3] = +a > 0, k[4] = c, fa.apply({}, k)
		}
		function ha(a, b, c) {
			var d, e = c - b,
				f = c - a.day();
			return f > e && (f -= 7), e - 7 > f && (f += 7), d = ta(a).add(f, "d"), {
				week: Math.ceil(d.dayOfYear() / 7),
				year: d.year()
			}
		}
		function ia(a, b, c, d, e) {
			var f, g, h = da(a, 0, 1).getUTCDay();
			return h = 0 === h ? 7 : h, c = null != c ? c : e, f = e - h + (h > d ? 7 : 0) - (e > h ? 7 : 0), g = 7 * (b - 1) + (c - e) + f + 1, {
				year: g > 0 ? a : a - 1,
				dayOfYear: g > 0 ? g : E(a - 1) + g
			}
		}
		function ja(a) {
			var c = a._i,
				d = a._f;
			return a._locale = a._locale || ta.localeData(a._l), null === c || d === b && "" === c ? ta.invalid({
				nullInput: !0
			}) : ("string" == typeof c && (a._i = c = a._locale.preparse(c)), ta.isMoment(c) ? new l(c, !0) : (d ? v(d) ? $(a) : X(a) : ba(a), new l(a)))
		}
		function ka(a, b) {
			var c, d;
			if (1 === b.length && v(b[0]) && (b = b[0]), !b.length) return ta();
			for (c = b[0], d = 1; d < b.length; ++d) b[d][a](c) && (c = b[d]);
			return c
		}
		function la(a, b) {
			var c;
			return "string" == typeof b && (b = a.localeData().monthsParse(b), "number" != typeof b) ? a : (c = Math.min(a.date(), C(a.year(), b)), a._d["set" + (a._isUTC ? "UTC" : "") + "Month"](b, c), a)
		}
		function ma(a, b) {
			return a._d["get" + (a._isUTC ? "UTC" : "") + b]()
		}
		function na(a, b, c) {
			return "Month" === b ? la(a, c) : a._d["set" + (a._isUTC ? "UTC" : "") + b](c)
		}
		function oa(a, b) {
			return function(c) {
				return null != c ? (na(this, a, c), ta.updateOffset(this, b), this) : ma(this, a)
			}
		}
		function pa(a) {
			return 400 * a / 146097
		}
		function qa(a) {
			return 146097 * a / 400
		}
		function ra(a) {
			ta.duration.fn[a] = function() {
				return this._data[a]
			}
		}
		function sa(a) {
			"undefined" == typeof ender && (ua = xa.moment, xa.moment = a ? g("Accessing Moment through the global scope is deprecated, and will be removed in an upcoming release.", ta) : ta)
		}
		for (var ta, ua, va, wa = "2.8.1", xa = "undefined" != typeof global ? global : this, ya = Math.round, za = 0, Aa = 1, Ba = 2, Ca = 3, Da = 4, Ea = 5, Fa = 6, Ga = {}, Ha = [], Ia = "undefined" != typeof c && c.exports, Ja = /^\/?Date\((\-?\d+)/i, Ka = /(\-)?(?:(\d*)\.)?(\d+)\:(\d+)(?:\:(\d+)\.?(\d{3})?)?/, La = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)$/, Ma = /(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,4}|X|zz?|ZZ?|.)/g, Na = /(\[[^\[]*\])|(\\)?(LT|LL?L?L?|l{1,4})/g, Oa = /\d\d?/, Pa = /\d{1,3}/, Qa = /\d{1,4}/, Ra = /[+\-]?\d{1,6}/, Sa = /\d+/, Ta = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i, Ua = /Z|[\+\-]\d\d:?\d\d/gi, Va = /T/i, Wa = /[\+\-]?\d+(\.\d{1,3})?/, Xa = /\d{1,2}/, Ya = /\d/, Za = /\d\d/, $a = /\d{3}/, _a = /\d{4}/, ab = /[+-]?\d{6}/, bb = /[+-]?\d+/, cb = /^\s*(?:[+-]\d{6}|\d{4})-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/, db = "YYYY-MM-DDTHH:mm:ssZ", eb = [
			["YYYYYY-MM-DD", /[+-]\d{6}-\d{2}-\d{2}/],
			["YYYY-MM-DD", /\d{4}-\d{2}-\d{2}/],
			["GGGG-[W]WW-E", /\d{4}-W\d{2}-\d/],
			["GGGG-[W]WW", /\d{4}-W\d{2}/],
			["YYYY-DDD", /\d{4}-\d{3}/]
		], fb = [
			["HH:mm:ss.SSSS", /(T| )\d\d:\d\d:\d\d\.\d+/],
			["HH:mm:ss", /(T| )\d\d:\d\d:\d\d/],
			["HH:mm", /(T| )\d\d:\d\d/],
			["HH", /(T| )\d\d/]
		], gb = /([\+\-]|\d\d)/gi, hb = ("Date|Hours|Minutes|Seconds|Milliseconds".split("|"), {
			Milliseconds: 1,
			Seconds: 1e3,
			Minutes: 6e4,
			Hours: 36e5,
			Days: 864e5,
			Months: 2592e6,
			Years: 31536e6
		}), ib = {
			ms: "millisecond",
			s: "second",
			m: "minute",
			h: "hour",
			d: "day",
			D: "date",
			w: "week",
			W: "isoWeek",
			M: "month",
			Q: "quarter",
			y: "year",
			DDD: "dayOfYear",
			e: "weekday",
			E: "isoWeekday",
			gg: "weekYear",
			GG: "isoWeekYear"
		}, jb = {
			dayofyear: "dayOfYear",
			isoweekday: "isoWeekday",
			isoweek: "isoWeek",
			weekyear: "weekYear",
			isoweekyear: "isoWeekYear"
		}, kb = {}, lb = {
			s: 45,
			m: 45,
			h: 22,
			d: 26,
			M: 11
		}, mb = "DDD w W M D d".split(" "), nb = "M D H h m s w W".split(" "), ob = {
			M: function() {
				return this.month() + 1
			},
			MMM: function(a) {
				return this.localeData().monthsShort(this, a)
			},
			MMMM: function(a) {
				return this.localeData().months(this, a)
			},
			D: function() {
				return this.date()
			},
			DDD: function() {
				return this.dayOfYear()
			},
			d: function() {
				return this.day()
			},
			dd: function(a) {
				return this.localeData().weekdaysMin(this, a)
			},
			ddd: function(a) {
				return this.localeData().weekdaysShort(this, a)
			},
			dddd: function(a) {
				return this.localeData().weekdays(this, a)
			},
			w: function() {
				return this.week()
			},
			W: function() {
				return this.isoWeek()
			},
			YY: function() {
				return q(this.year() % 100, 2)
			},
			YYYY: function() {
				return q(this.year(), 4)
			},
			YYYYY: function() {
				return q(this.year(), 5)
			},
			YYYYYY: function() {
				var a = this.year(),
					b = a >= 0 ? "+" : "-";
				return b + q(Math.abs(a), 6)
			},
			gg: function() {
				return q(this.weekYear() % 100, 2)
			},
			gggg: function() {
				return q(this.weekYear(), 4)
			},
			ggggg: function() {
				return q(this.weekYear(), 5)
			},
			GG: function() {
				return q(this.isoWeekYear() % 100, 2)
			},
			GGGG: function() {
				return q(this.isoWeekYear(), 4)
			},
			GGGGG: function() {
				return q(this.isoWeekYear(), 5)
			},
			e: function() {
				return this.weekday()
			},
			E: function() {
				return this.isoWeekday()
			},
			a: function() {
				return this.localeData().meridiem(this.hours(), this.minutes(), !0)
			},
			A: function() {
				return this.localeData().meridiem(this.hours(), this.minutes(), !1)
			},
			H: function() {
				return this.hours()
			},
			h: function() {
				return this.hours() % 12 || 12
			},
			m: function() {
				return this.minutes()
			},
			s: function() {
				return this.seconds()
			},
			S: function() {
				return B(this.milliseconds() / 100)
			},
			SS: function() {
				return q(B(this.milliseconds() / 10), 2)
			},
			SSS: function() {
				return q(this.milliseconds(), 3)
			},
			SSSS: function() {
				return q(this.milliseconds(), 3)
			},
			Z: function() {
				var a = -this.zone(),
					b = "+";
				return 0 > a && (a = -a, b = "-"), b + q(B(a / 60), 2) + ":" + q(B(a) % 60, 2)
			},
			ZZ: function() {
				var a = -this.zone(),
					b = "+";
				return 0 > a && (a = -a, b = "-"), b + q(B(a / 60), 2) + q(B(a) % 60, 2)
			},
			z: function() {
				return this.zoneAbbr()
			},
			zz: function() {
				return this.zoneName()
			},
			X: function() {
				return this.unix()
			},
			Q: function() {
				return this.quarter()
			}
		}, pb = {}, qb = ["months", "monthsShort", "weekdays", "weekdaysShort", "weekdaysMin"]; mb.length;) va = mb.pop(), ob[va + "o"] = j(ob[va], va);
		for (; nb.length;) va = nb.pop(), ob[va + va] = i(ob[va], 2);
		ob.DDDD = i(ob.DDD, 3), n(k.prototype, {
			set: function(a) {
				var b, c;
				for (c in a) b = a[c], "function" == typeof b ? this[c] = b : this["_" + c] = b
			},
			_months: "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
			months: function(a) {
				return this._months[a.month()]
			},
			_monthsShort: "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
			monthsShort: function(a) {
				return this._monthsShort[a.month()]
			},
			monthsParse: function(a) {
				var b, c, d;
				for (this._monthsParse || (this._monthsParse = []), b = 0; 12 > b; b++) if (this._monthsParse[b] || (c = ta.utc([2e3, b]), d = "^" + this.months(c, "") + "|^" + this.monthsShort(c, ""), this._monthsParse[b] = new RegExp(d.replace(".", ""), "i")), this._monthsParse[b].test(a)) return b
			},
			_weekdays: "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
			weekdays: function(a) {
				return this._weekdays[a.day()]
			},
			_weekdaysShort: "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
			weekdaysShort: function(a) {
				return this._weekdaysShort[a.day()]
			},
			_weekdaysMin: "Su_Mo_Tu_We_Th_Fr_Sa".split("_"),
			weekdaysMin: function(a) {
				return this._weekdaysMin[a.day()]
			},
			weekdaysParse: function(a) {
				var b, c, d;
				for (this._weekdaysParse || (this._weekdaysParse = []), b = 0; 7 > b; b++) if (this._weekdaysParse[b] || (c = ta([2e3, 1]).day(b), d = "^" + this.weekdays(c, "") + "|^" + this.weekdaysShort(c, "") + "|^" + this.weekdaysMin(c, ""), this._weekdaysParse[b] = new RegExp(d.replace(".", ""), "i")), this._weekdaysParse[b].test(a)) return b
			},
			_longDateFormat: {
				LT: "h:mm A",
				L: "MM/DD/YYYY",
				LL: "MMMM D, YYYY",
				LLL: "MMMM D, YYYY LT",
				LLLL: "dddd, MMMM D, YYYY LT"
			},
			longDateFormat: function(a) {
				var b = this._longDateFormat[a];
				return !b && this._longDateFormat[a.toUpperCase()] && (b = this._longDateFormat[a.toUpperCase()].replace(/MMMM|MM|DD|dddd/g, function(a) {
					return a.slice(1)
				}), this._longDateFormat[a] = b), b
			},
			isPM: function(a) {
				return "p" === (a + "").toLowerCase().charAt(0)
			},
			_meridiemParse: /[ap]\.?m?\.?/i,
			meridiem: function(a, b, c) {
				return a > 11 ? c ? "pm" : "PM" : c ? "am" : "AM"
			},
			_calendar: {
				sameDay: "[Today at] LT",
				nextDay: "[Tomorrow at] LT",
				nextWeek: "dddd [at] LT",
				lastDay: "[Yesterday at] LT",
				lastWeek: "[Last] dddd [at] LT",
				sameElse: "L"
			},
			calendar: function(a, b) {
				var c = this._calendar[a];
				return "function" == typeof c ? c.apply(b) : c
			},
			_relativeTime: {
				future: "in %s",
				past: "%s ago",
				s: "a few seconds",
				m: "a minute",
				mm: "%d minutes",
				h: "an hour",
				hh: "%d hours",
				d: "a day",
				dd: "%d days",
				M: "a month",
				MM: "%d months",
				y: "a year",
				yy: "%d years"
			},
			relativeTime: function(a, b, c, d) {
				var e = this._relativeTime[c];
				return "function" == typeof e ? e(a, b, c, d) : e.replace(/%d/i, a)
			},
			pastFuture: function(a, b) {
				var c = this._relativeTime[a > 0 ? "future" : "past"];
				return "function" == typeof c ? c(b) : c.replace(/%s/i, b)
			},
			ordinal: function(a) {
				return this._ordinal.replace("%d", a)
			},
			_ordinal: "%d",
			preparse: function(a) {
				return a
			},
			postformat: function(a) {
				return a
			},
			week: function(a) {
				return ha(a, this._week.dow, this._week.doy).week
			},
			_week: {
				dow: 0,
				doy: 6
			},
			_invalidDate: "Invalid date",
			invalidDate: function() {
				return this._invalidDate
			}
		}), ta = function(a, c, d, f) {
			var g;
			return "boolean" == typeof d && (f = d, d = b), g = {}, g._isAMomentObject = !0, g._i = a, g._f = c, g._l = d, g._strict = f, g._isUTC = !1, g._pf = e(), ja(g)
		}, ta.suppressDeprecationWarnings = !1, ta.createFromInputFallback = g("moment construction falls back to js Date. This is discouraged and will be removed in upcoming major release. Please refer to https://github.com/moment/moment/issues/1407 for more info.", function(a) {
			a._d = new Date(a._i)
		}), ta.min = function() {
			var a = [].slice.call(arguments, 0);
			return ka("isBefore", a)
		}, ta.max = function() {
			var a = [].slice.call(arguments, 0);
			return ka("isAfter", a)
		}, ta.utc = function(a, c, d, f) {
			var g;
			return "boolean" == typeof d && (f = d, d = b), g = {}, g._isAMomentObject = !0, g._useUTC = !0, g._isUTC = !0, g._l = d, g._i = a, g._f = c, g._strict = f, g._pf = e(), ja(g).utc()
		}, ta.unix = function(a) {
			return ta(1e3 * a)
		}, ta.duration = function(a, b) {
			var c, d, e, f, g = a,
				h = null;
			return ta.isDuration(a) ? g = {
				ms: a._milliseconds,
				d: a._days,
				M: a._months
			} : "number" == typeof a ? (g = {}, b ? g[b] = a : g.milliseconds = a) : (h = Ka.exec(a)) ? (c = "-" === h[1] ? -1 : 1, g = {
				y: 0,
				d: B(h[Ba]) * c,
				h: B(h[Ca]) * c,
				m: B(h[Da]) * c,
				s: B(h[Ea]) * c,
				ms: B(h[Fa]) * c
			}) : (h = La.exec(a)) ? (c = "-" === h[1] ? -1 : 1, e = function(a) {
				var b = a && parseFloat(a.replace(",", "."));
				return (isNaN(b) ? 0 : b) * c
			}, g = {
				y: e(h[2]),
				M: e(h[3]),
				d: e(h[4]),
				h: e(h[5]),
				m: e(h[6]),
				s: e(h[7]),
				w: e(h[8])
			}) : "object" == typeof g && ("from" in g || "to" in g) && (f = s(ta(g.from), ta(g.to)), g = {}, g.ms = f.milliseconds, g.M = f.months), d = new m(g), ta.isDuration(a) && a.hasOwnProperty("_locale") && (d._locale = a._locale), d
		}, ta.version = wa, ta.defaultFormat = db, ta.ISO_8601 = function() {}, ta.momentProperties = Ha, ta.updateOffset = function() {}, ta.relativeTimeThreshold = function(a, c) {
			return lb[a] === b ? !1 : c === b ? lb[a] : (lb[a] = c, !0)
		}, ta.lang = g("moment.lang is deprecated. Use moment.locale instead.", function(a, b) {
			return ta.locale(a, b)
		}), ta.locale = function(a, b) {
			var c;
			return a && (c = "undefined" != typeof b ? ta.defineLocale(a, b) : ta.localeData(a), c && (ta.duration._locale = ta._locale = c)), ta._locale._abbr
		}, ta.defineLocale = function(a, b) {
			return null !== b ? (b.abbr = a, Ga[a] || (Ga[a] = new k), Ga[a].set(b), ta.locale(a), Ga[a]) : (delete Ga[a], null)
		}, ta.langData = g("moment.langData is deprecated. Use moment.localeData instead.", function(a) {
			return ta.localeData(a)
		}), ta.localeData = function(a) {
			var b;
			if (a && a._locale && a._locale._abbr && (a = a._locale._abbr), !a) return ta._locale;
			if (!v(a)) {
				if (b = K(a)) return b;
				a = [a]
			}
			return J(a)
		}, ta.isMoment = function(a) {
			return a instanceof l || null != a && a.hasOwnProperty("_isAMomentObject")
		}, ta.isDuration = function(a) {
			return a instanceof m
		};
		for (va = qb.length - 1; va >= 0; --va) A(qb[va]);
		ta.normalizeUnits = function(a) {
			return y(a)
		}, ta.invalid = function(a) {
			var b = ta.utc(0 / 0);
			return null != a ? n(b._pf, a) : b._pf.userInvalidated = !0, b
		}, ta.parseZone = function() {
			return ta.apply(null, arguments).parseZone()
		}, ta.parseTwoDigitYear = function(a) {
			return B(a) + (B(a) > 68 ? 1900 : 2e3)
		}, n(ta.fn = l.prototype, {
			clone: function() {
				return ta(this)
			},
			valueOf: function() {
				return +this._d + 6e4 * (this._offset || 0)
			},
			unix: function() {
				return Math.floor(+this / 1e3)
			},
			toString: function() {
				return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")
			},
			toDate: function() {
				return this._offset ? new Date(+this) : this._d
			},
			toISOString: function() {
				var a = ta(this).utc();
				return 0 < a.year() && a.year() <= 9999 ? O(a, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : O(a, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]")
			},
			toArray: function() {
				var a = this;
				return [a.year(), a.month(), a.date(), a.hours(), a.minutes(), a.seconds(), a.milliseconds()]
			},
			isValid: function() {
				return H(this)
			},
			isDSTShifted: function() {
				return this._a ? this.isValid() && x(this._a, (this._isUTC ? ta.utc(this._a) : ta(this._a)).toArray()) > 0 : !1
			},
			parsingFlags: function() {
				return n({}, this._pf)
			},
			invalidAt: function() {
				return this._pf.overflow
			},
			utc: function(a) {
				return this.zone(0, a)
			},
			local: function(a) {
				return this._isUTC && (this.zone(0, a), this._isUTC = !1, a && this.add(this._d.getTimezoneOffset(), "m")), this
			},
			format: function(a) {
				var b = O(this, a || ta.defaultFormat);
				return this.localeData().postformat(b)
			},
			add: t(1, "add"),
			subtract: t(-1, "subtract"),
			diff: function(a, b, c) {
				var d, e, f = L(a, this),
					g = 6e4 * (this.zone() - f.zone());
				return b = y(b), "year" === b || "month" === b ? (d = 432e5 * (this.daysInMonth() + f.daysInMonth()), e = 12 * (this.year() - f.year()) + (this.month() - f.month()), e += (this - ta(this).startOf("month") - (f - ta(f).startOf("month"))) / d, e -= 6e4 * (this.zone() - ta(this).startOf("month").zone() - (f.zone() - ta(f).startOf("month").zone())) / d, "year" === b && (e /= 12)) : (d = this - f, e = "second" === b ? d / 1e3 : "minute" === b ? d / 6e4 : "hour" === b ? d / 36e5 : "day" === b ? (d - g) / 864e5 : "week" === b ? (d - g) / 6048e5 : d), c ? e : p(e)
			},
			from: function(a, b) {
				return ta.duration({
					to: this,
					from: a
				}).locale(this.locale()).humanize(!b)
			},
			fromNow: function(a) {
				return this.from(ta(), a)
			},
			calendar: function(a) {
				var b = a || ta(),
					c = L(b, this).startOf("day"),
					d = this.diff(c, "days", !0),
					e = -6 > d ? "sameElse" : -1 > d ? "lastWeek" : 0 > d ? "lastDay" : 1 > d ? "sameDay" : 2 > d ? "nextDay" : 7 > d ? "nextWeek" : "sameElse";
				return this.format(this.localeData().calendar(e, this))
			},
			isLeapYear: function() {
				return F(this.year())
			},
			isDST: function() {
				return this.zone() < this.clone().month(0).zone() || this.zone() < this.clone().month(5).zone()
			},
			day: function(a) {
				var b = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
				return null != a ? (a = ea(a, this.localeData()), this.add(a - b, "d")) : b
			},
			month: oa("Month", !0),
			startOf: function(a) {
				switch (a = y(a)) {
				case "year":
					this.month(0);
				case "quarter":
				case "month":
					this.date(1);
				case "week":
				case "isoWeek":
				case "day":
					this.hours(0);
				case "hour":
					this.minutes(0);
				case "minute":
					this.seconds(0);
				case "second":
					this.milliseconds(0)
				}
				return "week" === a ? this.weekday(0) : "isoWeek" === a && this.isoWeekday(1), "quarter" === a && this.month(3 * Math.floor(this.month() / 3)), this
			},
			endOf: function(a) {
				return a = y(a), this.startOf(a).add(1, "isoWeek" === a ? "week" : a).subtract(1, "ms")
			},
			isAfter: function(a, b) {
				return b = "undefined" != typeof b ? b : "millisecond", +this.clone().startOf(b) > +ta(a).startOf(b)
			},
			isBefore: function(a, b) {
				return b = "undefined" != typeof b ? b : "millisecond", +this.clone().startOf(b) < +ta(a).startOf(b)
			},
			isSame: function(a, b) {
				return b = b || "ms", +this.clone().startOf(b) === +L(a, this).startOf(b)
			},
			min: g("moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548", function(a) {
				return a = ta.apply(null, arguments), this > a ? this : a
			}),
			max: g("moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548", function(a) {
				return a = ta.apply(null, arguments), a > this ? this : a
			}),
			zone: function(a, b) {
				var c, d = this._offset || 0;
				return null == a ? this._isUTC ? d : this._d.getTimezoneOffset() : ("string" == typeof a && (a = R(a)), Math.abs(a) < 16 && (a = 60 * a), !this._isUTC && b && (c = this._d.getTimezoneOffset()), this._offset = a, this._isUTC = !0, null != c && this.subtract(c, "m"), d !== a && (!b || this._changeInProgress ? u(this, ta.duration(d - a, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, ta.updateOffset(this, !0), this._changeInProgress = null)), this)
			},
			zoneAbbr: function() {
				return this._isUTC ? "UTC" : ""
			},
			zoneName: function() {
				return this._isUTC ? "Coordinated Universal Time" : ""
			},
			parseZone: function() {
				return this._tzm ? this.zone(this._tzm) : "string" == typeof this._i && this.zone(this._i), this
			},
			hasAlignedHourOffset: function(a) {
				return a = a ? ta(a).zone() : 0, (this.zone() - a) % 60 === 0
			},
			daysInMonth: function() {
				return C(this.year(), this.month())
			},
			dayOfYear: function(a) {
				var b = ya((ta(this).startOf("day") - ta(this).startOf("year")) / 864e5) + 1;
				return null == a ? b : this.add(a - b, "d")
			},
			quarter: function(a) {
				return null == a ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (a - 1) + this.month() % 3)
			},
			weekYear: function(a) {
				var b = ha(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
				return null == a ? b : this.add(a - b, "y")
			},
			isoWeekYear: function(a) {
				var b = ha(this, 1, 4).year;
				return null == a ? b : this.add(a - b, "y")
			},
			week: function(a) {
				var b = this.localeData().week(this);
				return null == a ? b : this.add(7 * (a - b), "d")
			},
			isoWeek: function(a) {
				var b = ha(this, 1, 4).week;
				return null == a ? b : this.add(7 * (a - b), "d")
			},
			weekday: function(a) {
				var b = (this.day() + 7 - this.localeData()._week.dow) % 7;
				return null == a ? b : this.add(a - b, "d")
			},
			isoWeekday: function(a) {
				return null == a ? this.day() || 7 : this.day(this.day() % 7 ? a : a - 7)
			},
			isoWeeksInYear: function() {
				return D(this.year(), 1, 4)
			},
			weeksInYear: function() {
				var a = this.localeData()._week;
				return D(this.year(), a.dow, a.doy)
			},
			get: function(a) {
				return a = y(a), this[a]()
			},
			set: function(a, b) {
				return a = y(a), "function" == typeof this[a] && this[a](b), this
			},
			locale: function(a) {
				return a === b ? this._locale._abbr : (this._locale = ta.localeData(a), this)
			},
			lang: g("moment().lang() is deprecated. Use moment().localeData() instead.", function(a) {
				return a === b ? this.localeData() : (this._locale = ta.localeData(a), this)
			}),
			localeData: function() {
				return this._locale
			}
		}), ta.fn.millisecond = ta.fn.milliseconds = oa("Milliseconds", !1), ta.fn.second = ta.fn.seconds = oa("Seconds", !1), ta.fn.minute = ta.fn.minutes = oa("Minutes", !1), ta.fn.hour = ta.fn.hours = oa("Hours", !0), ta.fn.date = oa("Date", !0), ta.fn.dates = g("dates accessor is deprecated. Use date instead.", oa("Date", !0)), ta.fn.year = oa("FullYear", !0), ta.fn.years = g("years accessor is deprecated. Use year instead.", oa("FullYear", !0)), ta.fn.days = ta.fn.day, ta.fn.months = ta.fn.month, ta.fn.weeks = ta.fn.week, ta.fn.isoWeeks = ta.fn.isoWeek, ta.fn.quarters = ta.fn.quarter, ta.fn.toJSON = ta.fn.toISOString, n(ta.duration.fn = m.prototype, {
			_bubble: function() {
				var a, b, c, d = this._milliseconds,
					e = this._days,
					f = this._months,
					g = this._data,
					h = 0;
				g.milliseconds = d % 1e3, a = p(d / 1e3), g.seconds = a % 60, b = p(a / 60), g.minutes = b % 60, c = p(b / 60), g.hours = c % 24, e += p(c / 24), h = p(pa(e)), e -= p(qa(h)), f += p(e / 30), e %= 30, h += p(f / 12), f %= 12, g.days = e, g.months = f, g.years = h
			},
			abs: function() {
				return this._milliseconds = Math.abs(this._milliseconds), this._days = Math.abs(this._days), this._months = Math.abs(this._months), this._data.milliseconds = Math.abs(this._data.milliseconds), this._data.seconds = Math.abs(this._data.seconds), this._data.minutes = Math.abs(this._data.minutes), this._data.hours = Math.abs(this._data.hours), this._data.months = Math.abs(this._data.months), this._data.years = Math.abs(this._data.years), this
			},
			weeks: function() {
				return p(this.days() / 7)
			},
			valueOf: function() {
				return this._milliseconds + 864e5 * this._days + this._months % 12 * 2592e6 + 31536e6 * B(this._months / 12)
			},
			humanize: function(a) {
				var b = ga(this, !a, this.localeData());
				return a && (b = this.localeData().pastFuture(+this, b)), this.localeData().postformat(b)
			},
			add: function(a, b) {
				var c = ta.duration(a, b);
				return this._milliseconds += c._milliseconds, this._days += c._days, this._months += c._months, this._bubble(), this
			},
			subtract: function(a, b) {
				var c = ta.duration(a, b);
				return this._milliseconds -= c._milliseconds, this._days -= c._days, this._months -= c._months, this._bubble(), this
			},
			get: function(a) {
				return a = y(a), this[a.toLowerCase() + "s"]()
			},
			as: function(a) {
				var b, c;
				if (a = y(a), b = this._days + this._milliseconds / 864e5, "month" === a || "year" === a) return c = this._months + 12 * pa(b), "month" === a ? c : c / 12;
				switch (b += qa(this._months / 12), a) {
				case "week":
					return b / 7;
				case "day":
					return b;
				case "hour":
					return 24 * b;
				case "minute":
					return 24 * b * 60;
				case "second":
					return 24 * b * 60 * 60;
				case "millisecond":
					return 24 * b * 60 * 60 * 1e3;
				default:
					throw new Error("Unknown unit " + a)
				}
			},
			lang: ta.fn.lang,
			locale: ta.fn.locale,
			toIsoString: g("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", function() {
				return this.toISOString()
			}),
			toISOString: function() {
				var a = Math.abs(this.years()),
					b = Math.abs(this.months()),
					c = Math.abs(this.days()),
					d = Math.abs(this.hours()),
					e = Math.abs(this.minutes()),
					f = Math.abs(this.seconds() + this.milliseconds() / 1e3);
				return this.asSeconds() ? (this.asSeconds() < 0 ? "-" : "") + "P" + (a ? a + "Y" : "") + (b ? b + "M" : "") + (c ? c + "D" : "") + (d || e || f ? "T" : "") + (d ? d + "H" : "") + (e ? e + "M" : "") + (f ? f + "S" : "") : "P0D"
			},
			localeData: function() {
				return this._locale
			}
		});
		for (va in hb) hb.hasOwnProperty(va) && ra(va.toLowerCase());
		ta.duration.fn.asMilliseconds = function() {
			return this.as("ms")
		}, ta.duration.fn.asSeconds = function() {
			return this.as("s")
		}, ta.duration.fn.asMinutes = function() {
			return this.as("m")
		}, ta.duration.fn.asHours = function() {
			return this.as("h")
		}, ta.duration.fn.asDays = function() {
			return this.as("d")
		}, ta.duration.fn.asWeeks = function() {
			return this.as("weeks")
		}, ta.duration.fn.asMonths = function() {
			return this.as("M")
		}, ta.duration.fn.asYears = function() {
			return this.as("y")
		}, ta.locale("en", {
			ordinal: function(a) {
				var b = a % 10,
					c = 1 === B(a % 100 / 10) ? "th" : 1 === b ? "st" : 2 === b ? "nd" : 3 === b ? "rd" : "th";
				return a + c
			}
		}), Ia ? c.exports = ta : "function" == typeof define && define.amd ? (define("moment", ["require", "exports", "module"], function(a, b, c) {
			return c.config && c.config() && c.config().noGlobal === !0 && (xa.moment = ua), ta
		}), sa(!0)) : sa(), function(a) {
			a(ta)
		}(function(a) {
			return a.defineLocale("zh-cn", {
				months: "一月_二月_三月_四月_五月_六月_七月_八月_九月_十月_十一月_十二月".split("_"),
				monthsShort: "1月_2月_3月_4月_5月_6月_7月_8月_9月_10月_11月_12月".split("_"),
				weekdays: "星期日_星期一_星期二_星期三_星期四_星期五_星期六".split("_"),
				weekdaysShort: "周日_周一_周二_周三_周四_周五_周六".split("_"),
				weekdaysMin: "日_一_二_三_四_五_六".split("_"),
				longDateFormat: {
					LT: "Ah点mm",
					L: "YYYY-MM-DD",
					LL: "YYYY年MMMD日",
					LLL: "YYYY年MMMD日LT",
					LLLL: "YYYY年MMMD日ddddLT",
					l: "YYYY-MM-DD",
					ll: "YYYY年MMMD日",
					lll: "YYYY年MMMD日LT",
					llll: "YYYY年MMMD日ddddLT"
				},
				meridiem: function(a, b) {
					var c = 100 * a + b;
					return 600 > c ? "凌晨" : 900 > c ? "早上" : 1130 > c ? "上午" : 1230 > c ? "中午" : 1800 > c ? "下午" : "晚上"
				},
				calendar: {
					sameDay: function() {
						return 0 === this.minutes() ? "[今天]Ah[点整]" : "[今天]LT"
					},
					nextDay: function() {
						return 0 === this.minutes() ? "[明天]Ah[点整]" : "[明天]LT"
					},
					lastDay: function() {
						return 0 === this.minutes() ? "[昨天]Ah[点整]" : "[昨天]LT"
					},
					nextWeek: function() {
						var b, c;
						return b = a().startOf("week"), c = this.unix() - b.unix() >= 604800 ? "[下]" : "[本]", 0 === this.minutes() ? c + "dddAh点整" : c + "dddAh点mm"
					},
					lastWeek: function() {
						var b, c;
						return b = a().startOf("week"), c = this.unix() < b.unix() ? "[上]" : "[本]", 0 === this.minutes() ? c + "dddAh点整" : c + "dddAh点mm"
					},
					sameElse: "LL"
				},
				ordinal: function(a, b) {
					switch (b) {
					case "d":
					case "D":
					case "DDD":
						return a + "日";
					case "M":
						return a + "月";
					case "w":
					case "W":
						return a + "周";
					default:
						return a
					}
				},
				relativeTime: {
					future: "%s后",
					past: "%s前",
					s: "几秒",
					m: "1分钟",
					mm: "%d分钟",
					h: "1小时",
					hh: "%d小时",
					d: "1天",
					dd: "%d天",
					M: "1个月",
					MM: "%d个月",
					y: "1年",
					yy: "%d年"
				},
				week: {
					dow: 1,
					doy: 4
				}
			})
		})
	}).call(this)
}), function() {
	define("cs!timeStatus", ["require", "exports", "module", "moment"], function(a) {
		var b;
		return b = a("moment"), {
			enrollment: function(a, c) {
				var d, e, f;
				return e = b(), f = !a || b(a).isBefore(e) ? 1 : 0, d = !c || b(c).isAfter(e) ? 1 : 0, f && d ? 1 : f ? 0 : -1
			},
			courseOpen: function(a, c) {
				var d, e, f;
				return e = b(), f = a && b(a).isBefore(e) ? 1 : 0, d = !c || b(c).isAfter(e) ? 1 : 0, f && d ? 1 : f ? 0 : -1
			},
			main: function(a, c, d, e) {
				var f, g, h;
				if (g = this.enrollment(a, c), f = this.courseOpen(d, e), -1 === f) {
					if (-1 === g) return a && (h = b(a).fromNow()), {
						state: "preStart_register",
						time: h || "即将"
					};
					if (1 === g) return d && (h = b(d).fromNow()), {
						state: "preStart_course",
						time: h || "即将"
					};
					if (0 === g) return d && (h = b(d).fromNow()), {
						state: "preCourse_postRegister",
						time: h || "即将"
					}
				} else {
					if (1 !== f) return 1 === g ? {
						state: "end_course"
					} : {
						state: "end_register"
					};
					if (1 === g) return d && (h = b().from(d, 1)), {
						state: "start_course",
						time: h
					};
					if (0 === g) return c && (h = b().from(c, 1)), {
						state: "startCourse_postRegister",
						time: h
					}
				}
			}
		}
	})
}.call(this), define("css!alert", [], function() {}), define("alert", ["require", "exports", "module", "jquery", "support/transitionend", "css!alert"], function(a, b, c) {
	var d = a("jquery");
	return a("support/transitionend"), a("css!alert"), function(a) {
		function b() {
			if (i.addClass("alertM_out"), d.support.transition) for (var a = 0, b = g.length; b > a; a++) i[0].addEventListener(g[a], function() {
				d(this).remove(), e.closeFn()
			}, !1);
			else i.remove(), e.closeFn()
		}
		if (d("#alert_cover").length) return !1;
		var e = d.extend({
			titleHTML: "",
			mainHTML: "",
			type: "succ",
			tip: 0,
			isClose: 1,
			isDoBtn: 1,
			doHTML: "确定",
			style: "",
			id: "",
			closeFn: function() {},
			doFn: function() {}
		}, a || {}),
			f = d("body"),
			g = (d(window), ["transitionend", "webkitTransitionEnd", "otransitionend", "oTransitionEnd"]),
			h = "";
		h = e.tip ? '<div id="alert_cover"><div class="alert_cell"><div id="alertM" class="alertM_in ' + e.id + '" style="' + e.style + '"><div class="alertM_bg ' + ("succ" == e.type ? "succ" : "err") + '"><h6 class="h6" style="height:50px; line-height:50px; color:#fff; font-size:18px; text-indent:20px;"><div class="title">提示信息</div><i class="alert_close"></i></h6><div class="alertM_main alertM_tip" style="padding:20px 0;"><p>' + e.mainHTML + "</p></div></div></div></div></div>" : '<div id="alert_cover"><div class="alert_cell"><div id="alertM" class="alertM_in ' + e.id + '" style="' + e.style + '"><div class="alertM_bg ' + ("succ" == e.type ? "succ" : "err") + '"><h6 class="h6"><div class="title">' + e.titleHTML + "</div>" + (e.isClose ? '<i class="alert_close"></i>' : "") + '</h6><div class="alertM_main">' + e.mainHTML + "</div>" + (e.isDoBtn ? '<div class="alertM_bottom"><button>' + e.doHTML + "</button></div>" : "") + "</div></div></div></div>";
		var i = d(h),
			j = i.find(".h6").eq(0),
			k = j.find(".alert_close"),
			l = i.find(".alertM_bottom").eq(0).find("button");
		i.appendTo(f), d("#alertM").on("click", function(a) {
			a.stopPropagation()
		}), k.add(i).on("click", function() {
			var a = e.closeFn();
			0 != a && b()
		}), l.on("click", function() {
			var a = e.doFn();
			0 != a && b()
		}), c.exports.remove = b
	}
}), define("jsrender.min", ["jquery"], function() {
	!
	function(a, b, c) {
		"use strict";

		function d(a) {
			return a
		}
		function e(a) {
			return a
		}
		function f(a) {
			ua._dbgMode = a, S = a ? "Unavailable (nested view): use #getIndex()" : "", sa("dbg", ra.dbg = qa.dbg = a ? e : d)
		}
		function g(a) {
			this.name = (O.link ? "JsViews" : "JsRender") + " Error", this.message = a || this.name
		}
		function h(a, b) {
			for (var c in b) a[c] = b[c];
			return a
		}
		function i(a) {
			return "function" == typeof a
		}
		function j(a, b, c) {
			return (!ta.rTag || a) && (T = a ? a.charAt(0) : T, U = a ? a.charAt(1) : U, V = b ? b.charAt(0) : V, W = b ? b.charAt(1) : W, X = c || X, a = "\\" + T + "(\\" + X + ")?\\" + U, b = "\\" + V + "\\" + W, Q = "(?:(?:(\\w+(?=[\\/\\s\\" + V + "]))|(?:(\\w+)?(:)|(>)|!--((?:[^-]|-(?!-))*)--|(\\*)))\\s*((?:[^\\" + V + "]|\\" + V + "(?!\\" + W + "))*?)", ta.rTag = Q + ")", Q = new RegExp(a + Q + "(\\/)?|(?:\\/(\\w+)))" + b, "g"), R = new RegExp("<.*>|([^\\\\]|^)[{}]|" + a + ".*" + b)), [T, U, V, W, X]
		}
		function k(a, b) {
			b || (b = a, a = c);
			var d, e, f, g, h = this,
				i = !b || "root" === b;
			if (a) {
				if (g = h.type === b ? h : c, !g) if (d = h.views, h._.useKey) {
					for (e in d) if (g = d[e].get(a, b)) break
				} else for (e = 0, f = d.length; !g && f > e; e++) g = d[e].get(a, b)
			} else if (i) for (; h.parent.parent;) g = h = h.parent;
			else for (; h && !g;) g = h.type === b ? h : c, h = h.parent;
			return g
		}
		function l() {
			var a = this.get("item");
			return a ? a.index : c
		}
		function m() {
			return this.index
		}
		function n(b) {
			var d, e = this,
				f = e.linkCtx,
				g = (e.ctx || {})[b];
			return g === c && f && f.ctx && (g = f.ctx[b]), g === c && (g = ra[b]), g && i(g) && !g._wrp && (d = function() {
				return g.apply(this && this !== a ? this : e, arguments)
			}, d._wrp = 1, h(d, g)), d || g
		}
		function o(a, b, d) {
			var e, f, g, h = +d === d && d,
				i = b.linkCtx;
			if (h && (d = (h = b.tmpl.bnds[h - 1])(b.data, b, oa)), f = d.args[0], a || h) {
				e = i && i.tag, e || (e = {
					_: {
						inline: !i,
						bnd: h
					},
					tagName: ":",
					cvt: a,
					flow: !0,
					tagCtx: d,
					_is: "tag"
				}, i && (i.tag = e, e.linkCtx = i, d.ctx = K(d.ctx, i.view.ctx)), ta._lnk(e));
				for (g in d.props) fa.test(g) && (e[g] = d.props[g]);
				d.view = b, e.ctx = d.ctx || {}, delete d.ctx, b._.tag = e, f = p(e, e.convert || "true" !== a && a)[0], f = h && b._.onRender ? b._.onRender(f, b, h) : f, b._.tag = c
			}
			return f != c ? f : ""
		}
		function p(a, b) {
			var c = a.tagCtx,
				d = c.view,
				e = c.args;
			return b = b && ("" + b === b ? d.getRsc("converters", b) || D("Unknown converter: '" + b + "'") : b), e = e.length || c.index ? b ? e.slice() : e : [d.data], b && (b.depends && (a.depends = ta.getDeps(a.depends, a, b.depends, b)), e[0] = b.apply(a, e)), e
		}
		function q(a, b) {
			for (var d, e, f = this; d === c && f;) e = f.tmpl[a], d = e && e[b], f = f.parent;
			return d || oa[a][b]
		}
		function r(a, b, d, e, f) {
			var g, i, j, k, l, m, n, o, q, r, s, t, u, v, w, x, y, z, A, B, E = "",
				F = +e === e && e,
				G = b.linkCtx || 0,
				H = b.ctx,
				I = d || b.tmpl;
			for ("tag" === a._is && (i = a, a = i.tagName, e = i.tagCtxs), i = i || G.tag, F && (e = (t = I.bnds[F - 1])(b.data, b, oa)), n = e.length, m = 0; n > m; m++) {
				if (m || d && i || (u = b.getRsc("tags", a) || D("Unknown tag: {{" + a + "}}")), q = e[m], G.tag || (s = q.tmpl, s = q.content = s && I.tmpls[s - 1], h(q, {
					tmpl: (i ? i : u).template || s,
					render: C,
					index: m,
					view: b,
					ctx: K(q.ctx, H)
				})), (d = q.props.tmpl) && (d = "" + d === d ? b.getRsc("templates", d) || pa(d) : d, q.tmpl = d), i || (u._ctr ? (i = new u._ctr, v = !! i.init, i.attr = i.attr || u.attr || c) : ta._lnk(i = {
					render: u.render
				}), i._ = {
					inline: !G
				}, G && (G.attr = i.attr = G.attr || i.attr, G.tag = i, i.linkCtx = G), (i._.bnd = t || G.fn) ? i._.arrVws = {} : i.dataBoundOnly && D("{^{" + a + "}} tag must be data-bound"), i.tagName = a, i.parent = l = H && H.tag, i._is = "tag", i._def = u, i.tagCtxs = e), !m) for (z in A = q.props) fa.test(z) && (i[z] = A[z]);
				q.tag = i, i.dataMap && i.tagCtxs && (q.map = i.tagCtxs[m].map), i.flow || (r = q.ctx = q.ctx || {}, j = i.parents = r.parentTags = H && K(r.parentTags, H.parentTags) || {}, l && (j[l.tagName] = l), r.tag = i)
			}
			for (b._.tag = i, i.rendering = {}, m = 0; n > m; m++) q = i.tagCtx = i.tagCtxs[m], A = q.props, y = p(i, i.convert), (w = A.dataMap || i.dataMap) && (y.length || A.dataMap) && (x = q.map, (!x || x.src !== y[0] || f) && (x && x.src && x.unmap(), x = q.map = w.map(y[0], A)), y = [x.tgt]), i.ctx = q.ctx, !m && v && (B = i.template, i.init(q, G, i.ctx), v = c, i.template !== B && (i._.tmpl = i.template)), o = c, g = i.render, (g = i.render) && (o = g.apply(i, y)), y = y.length ? y : [b], o = o !== c ? o : q.render(y[0], !0) || (f ? c : ""), E = E ? E + (o || "") : o;
			return delete i.rendering, i.tagCtx = i.tagCtxs[0], i.ctx = i.tagCtx.ctx, i._.inline && (k = i.attr) && k !== ka && (E = "text" === k ? qa.html(E) : ""), F && b._.onRender ? b._.onRender(E, b, F) : E
		}
		function s(a, b, c, d, e, f, g, h) {
			var i, j, k, m = this,
				n = "array" === b,
				o = {
					key: 0,
					useKey: n ? 0 : 1,
					id: "" + ia++,
					onRender: h,
					bnds: {}
				};
			m.data = d, m.tmpl = e, m.content = g, m.views = n ? [] : {}, m.parent = c, m.type = b, m._ = o, m.linked = !! h, c ? (i = c.views, j = c._, j.useKey ? (i[o.key = "_" + j.useKey++] = m, m.index = S, m.getIndex = l, k = j.tag, o.bnd = n && (!k || !! k._.bnd && k)) : i.splice(o.key = m.index = f, 0, m), m.ctx = a || c.ctx) : m.ctx = a
		}
		function t(a) {
			var b, c, d, e, f, g, h;
			for (b in na) if (f = na[b], (g = f.compile) && (c = a[b + "s"])) for (d in c) e = c[d] = g(d, c[d], a), e && (h = ta.onStore[b]) && h(d, e, g)
		}
		function u(a, b, d) {
			var e, f;
			return i(b) ? b = {
				depends: b.depends,
				render: b
			} : (b.baseTag && (b.flow = !! b.flow, b = h(h({}, b.baseTag), b)), (f = b.template) !== c && (b.template = "" + f === f ? pa[f] || pa(f) : f), b.init !== !1 && (e = b._ctr = function() {}, (e.prototype = b).constructor = e)), d && (b._parentTmpl = d), b
		}
		function v(d, e, f, g) {
			function h(e) {
				if ("" + e === e || e.nodeType > 0) {
					try {
						j = e.nodeType > 0 ? e : !R.test(e) && b && b(a.document).find(e)[0]
					} catch (h) {}
					return j && (e = pa[d = d || j.getAttribute(la)], e || (d = d || "_" + ha++, j.setAttribute(la, d), e = pa[d] = v(d, j.innerHTML, f, g)), j = c), e
				}
			}
			var i, j;
			return e = e || "", i = h(e), g = g || (e.markup ? e : {}), g.tmplName = d, f && (g._parentTmpl = f), !i && e.markup && (i = h(e.markup)) && i.fn && (i.debug !== e.debug || i.allowCode !== e.allowCode) && (i = i.markup), i !== c ? (d && !f && (ma[d] = function() {
				return e.render.apply(e, arguments)
			}), i.fn || e.fn ? i.fn && (e = d && d !== i.tmplName ? K(g, i) : i) : (e = x(i, g), F(i.replace(aa, "\\$&"), e)), t(g), e) : void 0
		}
		function w(a) {
			function b(b, c) {
				this.tgt = a.getTgt(b, c)
			}
			return i(a) && (a = {
				getTgt: a
			}), a.baseMap && (a = h(h({}, a.baseMap), a)), a.map = function(a, c) {
				return new b(a, c)
			}, a
		}
		function x(a, b) {
			var c, d = ua.wrapMap || {},
				e = h({
					markup: a,
					tmpls: [],
					links: {},
					tags: {},
					bnds: [],
					_is: "template",
					render: B
				}, b);
			return b.htmlTag || (c = da.exec(a), e.htmlTag = c ? c[1].toLowerCase() : ""), c = d[e.htmlTag], c && c !== d.div && (e.markup = O.trim(e.markup)), e
		}
		function y(a, b) {
			function d(f, g, h) {
				var i, j, k, l;
				if (f && "object" == typeof f && !f.nodeType && !f.markup && !f.getTgt) {
					for (k in f) d(k, f[k], g);
					return oa
				}
				return g === c && (g = f, f = c), f && "" + f !== f && (h = g, g = f, f = c), l = h ? h[e] = h[e] || {} : d, j = b.compile, null === g ? f && delete l[f] : (g = j ? g = j(f, g, h) : g, f && (l[f] = g)), j && g && (g._is = a), g && (i = ta.onStore[a]) && i(f, g, j), g
			}
			var e = a + "s";
			oa[e] = d, na[a] = b
		}
		function z(a, b) {
			var c = this.jquery && (this[0] || D('Unknown template: "' + this.selector + '"')),
				d = c.getAttribute(la);
			return B.call(d ? pa[d] : pa(c), a, b)
		}
		function A(a, b, c) {
			if (ua._dbgMode) try {
				return a.fn(b, c, oa)
			} catch (d) {
				return D(d, c)
			}
			return a.fn(b, c, oa)
		}
		function B(a, b, c, d, e, f) {
			var g = this;
			return d || !g.fn._nvw || O.isArray(a) ? C.call(g, a, b, c, d, e, f) : A(g, a, {
				tmpl: g
			})
		}
		function C(a, b, d, e, f, g) {
			var h, i, j, k, l, m, n, o, p, q, r, t, u, v, w = this,
				x = "";
			if ( !! b === b && (d = b, b = c), f === !0 && (n = !0, f = 0), w.tag ? (o = w, w = w.tag, q = w._, t = w.tagName, u = q.tmpl || o.tmpl, v = w.attr && w.attr !== ka, b = K(b, w.ctx), p = o.content, o.props.link === !1 && (b = b || {}, b.link = !1), e = e || o.view, a = arguments.length ? a : e) : u = w, u && (!e && a && "view" === a._is && (e = a), e && (p = p || e.content, g = g || e._.onRender, a === e && (a = e.data), b = K(b, e.ctx)), e && e.data !== c || ((b = b || {}).root = a), u.fn || (u = pa[u] || pa(u)), u)) {
				if (g = (b && b.link) !== !1 && !v && g, r = g, g === !0 && (r = c, g = e._.onRender), b = u.helpers ? K(u.helpers, b) : b, O.isArray(a) && !d) for (k = n ? e : f !== c && e || new s(b, "array", e, a, u, f, p, g), h = 0, i = a.length; i > h; h++) j = a[h], l = new s(b, "item", k, j, u, (f || 0) + h, p, g), m = A(u, j, l), x += k._.onRender ? k._.onRender(m, l) : m;
				else(e || !u.fn._nvw) && (k = n ? e : new s(b, t || "data", e, a, u, f, p, g), q && !w.flow && (k.tag = w)), x += A(u, a, k);
				return r ? r(x, k) : x
			}
			return ""
		}
		function D(a, b, c) {
			var d = ua.onError(a, b, c);
			if ("" + a === a) throw new ta.Err(d);
			return !b.linkCtx && b.linked ? qa.html(d) : d
		}
		function E(a) {
			D("Syntax error\n" + a)
		}
		function F(a, b, c, d) {
			function e(b) {
				b -= m, b && o.push(a.substr(m, b).replace($, "\\n"))
			}
			function f(b) {
				b && E('Unmatched or missing tag: "{{/' + b + '}}" in template:\n' + a)
			}
			function g(g, h, l, q, r, s, t, u, v, w, x, y) {
				s && (r = ":", q = ka), w = w || c;
				var z = (h || c) && [],
					A = "",
					B = "",
					C = "",
					D = "",
					F = "",
					H = "",
					J = "",
					K = "",
					L = !w && !r && !t;
				l = l || (v = v || "#data", r), e(y), m = y + g.length, u ? k && o.push(["*", "\n" + v.replace(_, "$1") + "\n"]) : l ? ("else" === l && (ca.test(v) && E('for "{{else if expr}}" use "{{else expr}}"'), z = p[7], p[8] = a.substring(p[8], y), p = n.pop(), o = p[2], L = !0), v && I(v.replace($, " "), z, b).replace(ba, function(a, b, c, d, e, f, g, h) {
					return g ? (B += f + ",", D += "'" + h + "',") : c ? (C += d + f + ",", H += d + "'" + h + "',") : b ? J += f : ("trigger" === e && (K += f), A += d + f + ",", F += d + "'" + h + "',", j = j || fa.test(e)), ""
				}).slice(0, -1), i = [l, q || !! d || j || "", L && [], G(D, F, H), G(B, A, C), J, K, z || 0], o.push(i), L && (n.push(p), p = i, p[8] = m)) : x && (f(x !== p[0] && "else" !== p[0] && x), p[8] = a.substring(p[8], y), p = n.pop()), f(!p && x), o = p[2]
			}
			var h, i, j, k = b && b.allowCode,
				l = [],
				m = 0,
				n = [],
				o = l,
				p = [, , l];
			return c && (a = T + a + W), f(n[0] && n[0][2].pop()[0]), a.replace(Q, g), e(a.length), (m = l[l.length - 1]) && f("" + m !== m && +m[8] === m[8] && m[0]), c ? (h = J(l, a, c), h.paths = l[0][7]) : h = J(l, b), h._nvw && (h._nvw = !/[~#]/.test(a)), h
		}
		function G(a, b, c) {
			return [a.slice(0, -1), b.slice(0, -1), c.slice(0, -1)]
		}
		function H(a, b) {
			return "\n	" + (b ? b + ":{" : "") + "args:[" + a[0] + "]" + (a[1] || !b ? ",\n	props:{" + a[1] + "}" : "") + (a[2] ? ",\n	ctx:{" + a[2] + "}" : "")
		}
		function I(a, b, c) {
			function d(d, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, G, H, I) {
				function J(a, c, d, h, i, j, k, l) {
					if (d && (b && ("linkTo" === e && (f = b._jsvto = b._jsvto || [], f.push(r)), (!e || g) && b.push(r.slice(c.length))), "." !== d)) {
						var m = (h ? 'view.hlp("' + h + '")' : i ? "view" : "data") + (l ? (j ? "." + j : h ? "" : i ? "" : "." + d) + (k || "") : (l = h ? "" : i ? j || "" : d, ""));
						return m += l ? "." + l : "", c + ("view.data" === m.slice(0, 9) ? m.slice(5) : m)
					}
					return a
				}
				s = s || "", p = p || o || y, r = r || v, w = w || D || "";
				var K, L, M;
				return !t || i || h ? (b && C && !i && !h && (!e || g || f) && (K = m[n], I.length - 1 > H - K && (K = I.slice(K, H + 1), C = U + ":" + K + V, M = k[C], M || (k[C] = 1, k[C] = M = F(C, c || b, !0), M.paths.push({
					_jsvOb: M
				})), 1 !== M && (f || b).push({
					_jsvOb: M
				}))), i ? (i = !z, i ? d : '"') : h ? (h = !A, h ? d : '"') : (p ? (n++, m[n] = H++, p) : "") + (G ? n ? "" : (j = I.slice(j, H), (e ? (e = g = f = !1, "\b") : "\b,") + j + (j = H + d.length, "\b")) : u ? (n && E(a), e = r, g = q, j = H + d.length, r + ":") : r ? r.split("^").join(".").replace(Y, J) + (w ? (l[++n] = !0, "." !== r.charAt(0) && (m[n] = H), L ? "" : w) : s) : s ? s : B ? (l[n--] = !1, B + (w ? (l[++n] = !0, w) : "")) : x ? (l[n] || E(a), ",") : o ? "" : (i = z, h = A, '"'))) : void E(a)
			}
			var e, f, g, h, i, j = 0,
				k = c ? c.links : b && (b.links = b.links || {}),
				l = {},
				m = {
					0: -1
				},
				n = 0;
			return (a + (c ? " " : "")).replace(/\)\^/g, ").").replace(Z, d)
		}
		function J(a, c, d) {
			var e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, y, z, A, B, C, D, F, G, I, K = 0,
				L = "",
				M = {},
				N = a.length;
			for ("" + c === c ? (t = d ? 'data-link="' + c.replace($, " ").slice(1, -1) + '"' : c, c = 0) : (t = c.tmplName || "unnamed", c.allowCode && (M.allowCode = !0), c.debug && (M.debug = !0), p = c.bnds, s = c.tmpls), e = 0; N > e; e++) if (f = a[e], "" + f === f) L += '\n+"' + f + '"';
			else if (g = f[0], "*" === g) L += ";\n" + f[1] + "\nret=ret";
			else {
				if (h = f[1], w = f[2], i = H(f[3], "params") + "}," + H(r = f[4]), F = f[5], I = f[6], y = f[8], (B = "else" === g) || (K = 0, p && (q = f[7]) && (K = p.push(q))), (C = ":" === g) ? h && (g = h === ka ? ">" : h + g) : (w && (u = x(y, M), u.tmplName = t + "/" + g, J(w, u), s.push(u)), B || (v = g, A = L, L = ""), z = a[e + 1], z = z && "else" === z[0]), G = F ? ";\ntry{\nret+=" : "\n+", C && (q || I || h && h !== ka)) {
					if (D = "return {" + i + "};", F && (D = "try {\n" + D + "\n}catch(e){return {error: j._err(e,view," + F + ")}}\n"), D = new Function("data,view,j,u", " // " + t + " " + K + " " + g + "\n" + D), D.paths = q, D._tag = g, d) return D;
					o = 1
				}
				if (L += C ? (d ? (F ? "\ntry{\n" : "") + "return " : G) + (o ? (o = 0, n = m = !0, 'c("' + h + '",view,' + (q ? (p[K - 1] = D, K) : "{" + i + "}") + ")") : ">" === g ? (k = !0, "h(" + r[0] + ")") : (l = !0, "((v=" + r[0] + ')!=null?v:"")')) : (n = j = !0, "\n{view:view,tmpl:" + (w ? s.length : "0") + "," + i + "},"), v && !z) {
					if (L = "[" + L.slice(0, -1) + "]", (d || q) && (L = new Function("data,view,j,u", " // " + t + " " + K + " " + v + "\nreturn " + L + ";"), q && ((p[K - 1] = L).paths = q), L._tag = g, d)) return L;
					L = A + G + 't("' + v + '",view,this,' + (K || L) + ")", q = 0, v = 0
				}
				F && (n = !0, L += ";\n}catch(e){ret" + (d ? "urn " : "+=") + "j._err(e,view," + F + ");}\n" + (d ? "" : "ret=ret"))
			}
			L = "// " + t + "\nj=j||" + (b ? "jQuery." : "jsviews.") + "views;var v" + (j ? ",t=j._tag" : "") + (m ? ",c=j._cnvt" : "") + (k ? ",h=j.converters.html" : "") + (d ? ";\n" : ',ret=""\n') + (M.debug ? "debugger;" : "") + L + (d ? "\n" : ";\nreturn ret;");
			try {
				L = new Function("data,view,j,u", L)
			} catch (O) {
				E("Compiled template code:\n\n" + L + '\n: "' + O.message + '"')
			}
			return c && (c.fn = L), n || (L._nvw = !0), L
		}
		function K(a, b) {
			return a && a !== b ? b ? h(h({}, b), a) : a : b && h({}, b)
		}
		function L(a) {
			return ja[a] || (ja[a] = "&#" + a.charCodeAt(0) + ";")
		}
		function M(a) {
			var b, c, d = [];
			if ("object" == typeof a) for (b in a) c = a[b], c && c.toJSON && !c.toJSON() || i(c) || d.push({
				key: b,
				prop: c
			});
			return d
		}
		function N(a) {
			return null != a ? ea.test(a) && ("" + a).replace(ga, L) || a : ""
		}
		if (!(b && b.render || a.jsviews)) {
			var O, P, Q, R, S, T = "{",
				U = "{",
				V = "}",
				W = "}",
				X = "^",
				Y = /^(!*?)(?:null|true|false|\d[\d.]*|([\w$]+|\.|~([\w$]+)|#(view|([\w$]+))?)([\w$.^]*?)(?:[.[^]([\w$]+)\]?)?)$/g,
				Z = /(\()(?=\s*\()|(?:([([])\s*)?(?:(\^?)(!*?[#~]?[\w$.^]+)?\s*((\+\+|--)|\+|-|&&|\|\||===|!==|==|!=|<=|>=|[<>%*:?\/]|(=))\s*|(!*?[#~]?[\w$.^]+)([([])?)|(,\s*)|(\(?)\\?(?:(')|("))|(?:\s*(([)\]])(?=\s*\.|\s*\^|\s*$)|[)\]])([([]?))|(\s+)/g,
				$ = /[ \t]*(\r\n|\n|\r)/g,
				_ = /\\(['"])/g,
				aa = /['"\\]/g,
				ba = /(?:\x08|^)(onerror:)?(?:(~?)(([\w$]+):)?([^\x08]+))\x08(,)?([^\x08]+)/gi,
				ca = /^if\s/,
				da = /<(\w+)[>\s]/,
				ea = /[\x00`><\"'&]/,
				fa = /^on[A-Z]|^convert(Back)?$/,
				ga = /[\x00`><"'&]/g,
				ha = 0,
				ia = 0,
				ja = {
					"&": "&amp;",
					"<": "&lt;",
					">": "&gt;",
					"\x00": "&#0;",
					"'": "&#39;",
					'"': "&#34;",
					"`": "&#96;"
				},
				ka = "html",
				la = "data-jsv-tmpl",
				ma = {},
				na = {
					template: {
						compile: v
					},
					tag: {
						compile: u
					},
					helper: {},
					converter: {}
				},
				oa = {
					jsviews: "v1.0.0-beta",
					settings: function(a) {
						h(ua, a), f(ua._dbgMode), ua.jsv && ua.jsv()
					},
					sub: {
						View: s,
						Err: g,
						tmplFn: F,
						cvt: p,
						parse: I,
						extend: h,
						syntaxErr: E,
						onStore: {},
						_lnk: d
					},
					map: w,
					_cnvt: o,
					_tag: r,
					_err: D
				};
			(g.prototype = new Error).constructor = g, l.depends = function() {
				return [this.get("item"), "index"]
			}, m.depends = function() {
				return ["index"]
			}, s.prototype = {
				get: k,
				getIndex: m,
				getRsc: q,
				hlp: n,
				_is: "view"
			};
			for (P in na) y(P, na[P]);
			var pa = oa.templates,
				qa = oa.converters,
				ra = oa.helpers,
				sa = oa.tags,
				ta = oa.sub,
				ua = oa.settings;
			b ? (O = b, O.fn.render = z, O.observable && (h(ta, O.views.sub), oa.map = O.views.map)) : (O = a.jsviews = {}, O.isArray = Array && Array.isArray ||
			function(a) {
				return "[object Array]" === Object.prototype.toString.call(a)
			}), O.render = ma, O.views = oa, O.templates = pa = oa.templates, ua({
				debugMode: f,
				delimiters: j,
				onError: function(a, b, d) {
					return b && (a = d === c ? "{Error: " + a + "}" : i(d) ? d(a, b) : d), a == c ? "" : a
				},
				_dbgMode: !0
			}), sa({
				"else": function() {},
				"if": {
					render: function(a) {
						var b = this;
						return b.rendering.done || !a && (arguments.length || !b.tagCtx.index) ? "" : (b.rendering.done = !0, b.selected = b.tagCtx.index, b.tagCtx.render(b.tagCtx.view, !0))
					},
					onUpdate: function(a, b, c) {
						for (var d, e, f = 0;
						(d = this.tagCtxs[f]) && d.args.length; f++) if (d = d.args[0], e = !d != !c[f].args[0], !this.convert && !! d || e) return e;
						return !1
					},
					flow: !0
				},
				"for": {
					render: function(a) {
						var b, d = this,
							e = d.tagCtx,
							f = "",
							g = 0;
						return d.rendering.done || ((b = !arguments.length) && (a = e.view.data), a !== c && (f += e.render(a, b), g += O.isArray(a) ? a.length : 1), (d.rendering.done = g) && (d.selected = e.index)), f
					},
					flow: !0
				},
				include: {
					flow: !0
				},
				"*": {
					render: d,
					flow: !0
				}
			}), sa("props", {
				baseTag: sa["for"],
				dataMap: w(M)
			}), qa({
				html: N,
				attr: N,
				url: function(a) {
					return a != c ? encodeURI("" + a) : null === a ? a : ""
				}
			}), j()
		}
	}(this, this.jQuery)
}), define("jquery.highcharts", ["jquery"], function() {
	!
	function() {
		function a(a, b) {
			var c;
			a || (a = {});
			for (c in b) a[c] = b[c];
			return a
		}
		function b() {
			var a, b, c = arguments,
				d = {},
				e = function(a, b) {
					var c, d;
					"object" != typeof a && (a = {});
					for (d in b) b.hasOwnProperty(d) && (c = b[d], a[d] = c && "object" == typeof c && "[object Array]" !== Object.prototype.toString.call(c) && "renderTo" !== d && "number" != typeof c.nodeType ? e(a[d] || {}, c) : b[d]);
					return a
				};
			for (c[0] === !0 && (d = c[1], c = Array.prototype.slice.call(c, 2)), b = c.length, a = 0; b > a; a++) d = e(d, c[a]);
			return d
		}
		function c(a, b) {
			return parseInt(a, b || 10)
		}
		function d(a) {
			return "string" == typeof a
		}
		function e(a) {
			return a && "object" == typeof a
		}
		function f(a) {
			return "[object Array]" === Object.prototype.toString.call(a)
		}
		function g(a) {
			return "number" == typeof a
		}
		function h(a) {
			return ja.log(a) / ja.LN10
		}
		function i(a) {
			return ja.pow(10, a)
		}
		function j(a, b) {
			for (var c = a.length; c--;) if (a[c] === b) {
				a.splice(c, 1);
				break
			}
		}
		function k(a) {
			return a !== K && null !== a
		}
		function l(a, b, c) {
			var f, g;
			if (d(b)) k(c) ? a.setAttribute(b, c) : a && a.getAttribute && (g = a.getAttribute(b));
			else if (k(b) && e(b)) for (f in b) a.setAttribute(f, b[f]);
			return g
		}
		function m(a) {
			return f(a) ? a : [a]
		}
		function n() {
			var a, b, c = arguments,
				d = c.length;
			for (a = 0; d > a; a++) if (b = c[a], b !== K && null !== b) return b
		}
		function o(b, c) {
			wa && !Ca && c && c.opacity !== K && (c.filter = "alpha(opacity=" + 100 * c.opacity + ")"), a(b.style, c)
		}
		function p(b, c, d, e, f) {
			return b = ha.createElement(b), c && a(b, c), f && o(b, {
				padding: 0,
				border: La,
				margin: 0
			}), d && o(b, d), e && e.appendChild(b), b
		}
		function q(b, c) {
			var d = function() {
					return K
				};
			return d.prototype = new b, a(d.prototype, c), d
		}
		function r(a, b, d, e) {
			var f = ga.numberFormat,
				g = O.lang,
				h = +a || 0,
				i = -1 === b ? (h.toString().split(".")[1] || "").length : isNaN(b = pa(b)) ? 2 : b,
				j = void 0 === d ? g.decimalPoint : d,
				g = void 0 === e ? g.thousandsSep : e,
				k = 0 > h ? "-" : "",
				l = String(c(h = pa(h).toFixed(i))),
				m = l.length > 3 ? l.length % 3 : 0;
			return f !== r ? f(a, b, d, e) : k + (m ? l.substr(0, m) + g : "") + l.substr(m).replace(/(\d{3})(?=\d)/g, "$1" + g) + (i ? j + pa(h - l).toFixed(i).slice(2) : "")
		}
		function s(a, b) {
			return Array((b || 2) + 1 - String(a).length).join(0) + a
		}
		function t(a, b, c) {
			var d = a[b];
			a[b] = function() {
				var a = Array.prototype.slice.call(arguments);
				return a.unshift(d), c.apply(this, a)
			}
		}
		function u(a, b) {
			for (var c, d, e, f, g, h = "{", i = !1, j = []; - 1 !== (h = a.indexOf(h));) {
				if (c = a.slice(0, h), i) {
					for (d = c.split(":"), e = d.shift().split("."), g = e.length, c = b, f = 0; g > f; f++) c = c[e[f]];
					d.length && (d = d.join(":"), e = /\.([0-9])/, f = O.lang, g = void 0, /f$/.test(d) ? (g = (g = d.match(e)) ? g[1] : -1, null !== c && (c = r(c, g, f.decimalPoint, d.indexOf(",") > -1 ? f.thousandsSep : ""))) : c = P(d, c))
				}
				j.push(c), a = a.slice(h + 1), h = (i = !i) ? "}" : "{"
			}
			return j.push(a), j.join("")
		}
		function v(a) {
			return ja.pow(10, la(ja.log(a) / ja.LN10))
		}
		function w(a, b, c, d) {
			var e, c = n(c, 1);
			for (e = a / c, b || (b = [1, 2, 2.5, 5, 10], d === !1 && (1 === c ? b = [1, 2, 5, 10] : .1 >= c && (b = [1 / c]))), d = 0; d < b.length && (a = b[d], !(e <= (b[d] + (b[d + 1] || b[d])) / 2)); d++);
			return a *= c
		}
		function x(a, b) {
			var c, d, e = a.length;
			for (d = 0; e > d; d++) a[d].ss_i = d;
			for (a.sort(function(a, d) {
				return c = b(a, d), 0 === c ? a.ss_i - d.ss_i : c
			}), d = 0; e > d; d++) delete a[d].ss_i
		}
		function y(a) {
			for (var b = a.length, c = a[0]; b--;) a[b] < c && (c = a[b]);
			return c
		}
		function z(a) {
			for (var b = a.length, c = a[0]; b--;) a[b] > c && (c = a[b]);
			return c
		}
		function A(a, b) {
			for (var c in a) a[c] && a[c] !== b && a[c].destroy && a[c].destroy(), delete a[c]
		}
		function B(a) {
			N || (N = p(Ka)), a && N.appendChild(a), N.innerHTML = ""
		}
		function C(a) {
			return parseFloat(a.toPrecision(14))
		}
		function D(a, b) {
			Q = n(a, b.animation)
		}
		function E() {
			var a = O.global.useUTC,
				b = a ? "getUTC" : "get",
				c = a ? "setUTC" : "set";
			U = O.global.Date || window.Date, W = 6e4 * (a && O.global.timezoneOffset || 0), V = a ? U.UTC : function(a, b, c, d, e, f) {
				return new U(a, b, n(c, 1), n(d, 0), n(e, 0), n(f, 0)).getTime()
			}, X = b + "Minutes", Y = b + "Hours", Z = b + "Day", $ = b + "Date", _ = b + "Month", aa = b + "FullYear", ba = c + "Minutes", ca = c + "Hours", da = c + "Date", ea = c + "Month", fa = c + "FullYear"
		}
		function F() {}
		function G(a, b, c, d) {
			this.axis = a, this.pos = b, this.type = c || "", this.isNew = !0, !c && !d && this.addLabel()
		}
		function H() {
			this.init.apply(this, arguments)
		}
		function I() {
			this.init.apply(this, arguments)
		}
		function J(a, b, c, d, e) {
			var f = a.chart.inverted;
			this.axis = a, this.isNegative = c, this.options = b, this.x = d, this.total = null, this.points = {}, this.stack = e, this.alignOptions = {
				align: b.align || (f ? c ? "left" : "right" : "center"),
				verticalAlign: b.verticalAlign || (f ? "middle" : c ? "bottom" : "top"),
				y: n(b.y, f ? 4 : c ? 14 : -6),
				x: n(b.x, f ? c ? -6 : 6 : 0)
			}, this.textAlign = b.textAlign || (f ? c ? "right" : "left" : "center")
		}
		var K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, $, _, aa, ba, ca, da, ea, fa, ga, ha = document,
			ia = window,
			ja = Math,
			ka = ja.round,
			la = ja.floor,
			ma = ja.ceil,
			na = ja.max,
			oa = ja.min,
			pa = ja.abs,
			qa = ja.cos,
			ra = ja.sin,
			sa = ja.PI,
			ta = 2 * sa / 360,
			ua = navigator.userAgent,
			va = ia.opera,
			wa = /msie/i.test(ua) && !va,
			xa = 8 === ha.documentMode,
			ya = /AppleWebKit/.test(ua),
			za = /Firefox/.test(ua),
			Aa = /(Mobile|Android|Windows Phone)/.test(ua),
			Ba = "http://www.w3.org/2000/svg",
			Ca = !! ha.createElementNS && !! ha.createElementNS(Ba, "svg").createSVGRect,
			Da = za && parseInt(ua.split("Firefox/")[1], 10) < 4,
			Ea = !Ca && !wa && !! ha.createElement("canvas").getContext,
			Fa = {},
			Ga = 0,
			Ha = function() {
				return K
			},
			Ia = [],
			Ja = 0,
			Ka = "div",
			La = "none",
			Ma = /^[0-9]+$/,
			Na = "stroke-width",
			Oa = {};
		ia.Highcharts ? T(16, !0) : ga = ia.Highcharts = {}, P = function(b, c, d) {
			if (!k(c) || isNaN(c)) return "Invalid date";
			var e, b = n(b, "%Y-%m-%d %H:%M:%S"),
				f = new U(c - W),
				g = f[Y](),
				h = f[Z](),
				i = f[$](),
				j = f[_](),
				l = f[aa](),
				m = O.lang,
				o = m.weekdays,
				f = a({
					a: o[h].substr(0, 3),
					A: o[h],
					d: s(i),
					e: i,
					b: m.shortMonths[j],
					B: m.months[j],
					m: s(j + 1),
					y: l.toString().substr(2, 2),
					Y: l,
					H: s(g),
					I: s(g % 12 || 12),
					l: g % 12 || 12,
					M: s(f[X]()),
					p: 12 > g ? "AM" : "PM",
					P: 12 > g ? "am" : "pm",
					S: s(f.getSeconds()),
					L: s(ka(c % 1e3), 3)
				}, ga.dateFormats);
			for (e in f) for (; - 1 !== b.indexOf("%" + e);) b = b.replace("%" + e, "function" == typeof f[e] ? f[e](c) : f[e]);
			return d ? b.substr(0, 1).toUpperCase() + b.substr(1) : b
		}, T = function(a, b) {
			var c = "Highcharts error #" + a + ": www.highcharts.com/errors/" + a;
			if (b) throw c;
			ia.console && console.log(c)
		}, S = {
			millisecond: 1,
			second: 1e3,
			minute: 6e4,
			hour: 36e5,
			day: 864e5,
			week: 6048e5,
			month: 26784e5,
			year: 31556952e3
		}, R = {
			init: function(a, b, c) {
				var d, e, f, b = b || "",
					g = a.shift,
					h = b.indexOf("C") > -1,
					i = h ? 7 : 3,
					b = b.split(" "),
					c = [].concat(c),
					j = function(a) {
						for (d = a.length; d--;)"M" === a[d] && a.splice(d + 1, 0, a[d + 1], a[d + 2], a[d + 1], a[d + 2])
					};
				if (h && (j(b), j(c)), a.isArea && (e = b.splice(b.length - 6, 6), f = c.splice(c.length - 6, 6)), g <= c.length / i && b.length === c.length) for (; g--;) c = [].concat(c).splice(0, i).concat(c);
				if (a.shift = 0, b.length) for (a = c.length; b.length < a;) g = [].concat(b).splice(b.length - i, i), h && (g[i - 6] = g[i - 2], g[i - 5] = g[i - 1]), b = b.concat(g);
				return e && (b = b.concat(e), c = c.concat(f)), [b, c]
			},
			step: function(a, b, c, d) {
				var e = [],
					f = a.length;
				if (1 === c) e = d;
				else if (f === b.length && 1 > c) for (; f--;) d = parseFloat(a[f]), e[f] = isNaN(d) ? a[f] : c * parseFloat(b[f] - d) + d;
				else e = b;
				return e
			}
		}, function(b) {
			ia.HighchartsAdapter = ia.HighchartsAdapter || b && {
				init: function(a) {
					var c = b.fx;
					b.extend(b.easing, {
						easeOutQuad: function(a, b, c, d, e) {
							return -d * (b /= e) * (b - 2) + c
						}
					}), b.each(["cur", "_default", "width", "height", "opacity"], function(a, d) {
						var e, f = c.step;
						"cur" === d ? f = c.prototype : "_default" === d && b.Tween && (f = b.Tween.propHooks[d], d = "set"), (e = f[d]) && (f[d] = function(b) {
							var c, b = a ? b : this;
							return "align" !== b.prop ? (c = b.elem, c.attr ? c.attr(b.prop, "cur" === d ? K : b.now) : e.apply(this, arguments)) : void 0
						})
					}), t(b.cssHooks.opacity, "get", function(a, b, c) {
						return b.attr ? b.opacity || 0 : a.call(this, b, c)
					}), this.addAnimSetter("d", function(b) {
						var c, d = b.elem;
						b.started || (c = a.init(d, d.d, d.toD), b.start = c[0], b.end = c[1], b.started = !0), d.attr("d", a.step(b.start, b.end, b.pos, d.toD))
					}), this.each = Array.prototype.forEach ?
					function(a, b) {
						return Array.prototype.forEach.call(a, b)
					} : function(a, b) {
						var c, d = a.length;
						for (c = 0; d > c; c++) if (b.call(a[c], a[c], c, a) === !1) return c
					}, b.fn.highcharts = function() {
						var a, b, c = "Chart",
							e = arguments;
						return this[0] && (d(e[0]) && (c = e[0], e = Array.prototype.slice.call(e, 1)), a = e[0], a !== K && (a.chart = a.chart || {}, a.chart.renderTo = this[0], new ga[c](a, e[1]), b = this), a === K && (b = Ia[l(this[0], "data-highcharts-chart")])), b
					}
				},
				addAnimSetter: function(a, c) {
					b.Tween ? b.Tween.propHooks[a] = {
						set: c
					} : b.fx.step[a] = c
				},
				getScript: b.getScript,
				inArray: b.inArray,
				adapterRun: function(a, c) {
					return b(a)[c]()
				},
				grep: b.grep,
				map: function(a, b) {
					for (var c = [], d = 0, e = a.length; e > d; d++) c[d] = b.call(a[d], a[d], d, a);
					return c
				},
				offset: function(a) {
					return b(a).offset()
				},
				addEvent: function(a, c, d) {
					b(a).bind(c, d)
				},
				removeEvent: function(a, c, d) {
					var e = ha.removeEventListener ? "removeEventListener" : "detachEvent";
					ha[e] && a && !a[e] && (a[e] = function() {}), b(a).unbind(c, d)
				},
				fireEvent: function(c, d, e, f) {
					var g, h = b.Event(d),
						i = "detached" + d;
					!wa && e && (delete e.layerX, delete e.layerY, delete e.returnValue), a(h, e), c[d] && (c[i] = c[d], c[d] = null), b.each(["preventDefault", "stopPropagation"], function(a, b) {
						var c = h[b];
						h[b] = function() {
							try {
								c.call(h)
							} catch (a) {
								"preventDefault" === b && (g = !0)
							}
						}
					}), b(c).trigger(h), c[i] && (c[d] = c[i], c[i] = null), f && !h.isDefaultPrevented() && !g && f(h)
				},
				washMouseEvent: function(a) {
					var b = a.originalEvent || a;
					return b.pageX === K && (b.pageX = a.pageX, b.pageY = a.pageY), b
				},
				animate: function(a, c, d) {
					var e = b(a);
					a.style || (a.style = {}), c.d && (a.toD = c.d, c.d = 1), e.stop(), c.opacity !== K && a.attr && (c.opacity += "px"), a.hasAnim = 1, e.animate(c, d)
				},
				stop: function(a) {
					a.hasAnim && b(a).stop()
				}
			}
		}(ia.jQuery);
		var Pa = ia.HighchartsAdapter,
			Qa = Pa || {};
		Pa && Pa.init.call(Pa, R);
		var Ra = Qa.adapterRun,
			Sa = Qa.getScript,
			Ta = Qa.inArray,
			Ua = Qa.each,
			Va = Qa.grep,
			Wa = Qa.offset,
			Xa = Qa.map,
			Ya = Qa.addEvent,
			Za = Qa.removeEvent,
			$a = Qa.fireEvent,
			_a = Qa.washMouseEvent,
			ab = Qa.animate,
			bb = Qa.stop,
			Qa = {
				enabled: !0,
				x: 0,
				y: 15,
				style: {
					color: "#606060",
					cursor: "default",
					fontSize: "11px"
				}
			};
		O = {
			colors: "#7cb5ec,#434348,#90ed7d,#f7a35c,#8085e9,#f15c80,#e4d354,#8085e8,#8d4653,#91e8e1".split(","),
			symbols: ["circle", "diamond", "square", "triangle", "triangle-down"],
			lang: {
				loading: "Loading...",
				months: "January,February,March,April,May,June,July,August,September,October,November,December".split(","),
				shortMonths: "Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec".split(","),
				weekdays: "Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday".split(","),
				decimalPoint: ".",
				numericSymbols: "k,M,G,T,P,E".split(","),
				resetZoom: "Reset zoom",
				resetZoomTitle: "Reset zoom level 1:1",
				thousandsSep: ","
			},
			global: {
				useUTC: !0,
				canvasToolsURL: "http://code.highcharts.com/4.0.4/modules/canvas-tools.js",
				VMLRadialGradientURL: "http://code.highcharts.com/4.0.4/gfx/vml-radial-gradient.png"
			},
			chart: {
				borderColor: "#4572A7",
				borderRadius: 0,
				defaultSeriesType: "line",
				ignoreHiddenSeries: !0,
				spacing: [10, 10, 15, 10],
				backgroundColor: "#FFFFFF",
				plotBorderColor: "#C0C0C0",
				resetZoomButton: {
					theme: {
						zIndex: 20
					},
					position: {
						align: "right",
						x: -10,
						y: 10
					}
				}
			},
			title: {
				text: "Chart title",
				align: "center",
				margin: 15,
				style: {
					color: "#333333",
					fontSize: "18px"
				}
			},
			subtitle: {
				text: "",
				align: "center",
				style: {
					color: "#555555"
				}
			},
			plotOptions: {
				line: {
					allowPointSelect: !1,
					showCheckbox: !1,
					animation: {
						duration: 1e3
					},
					events: {},
					lineWidth: 2,
					marker: {
						lineWidth: 0,
						radius: 4,
						lineColor: "#FFFFFF",
						states: {
							hover: {
								enabled: !0,
								lineWidthPlus: 1,
								radiusPlus: 2
							},
							select: {
								fillColor: "#FFFFFF",
								lineColor: "#000000",
								lineWidth: 2
							}
						}
					},
					point: {
						events: {}
					},
					dataLabels: b(Qa, {
						align: "center",
						enabled: !1,
						formatter: function() {
							return null === this.y ? "" : r(this.y, -1)
						},
						verticalAlign: "bottom",
						y: 0
					}),
					cropThreshold: 300,
					pointRange: 0,
					states: {
						hover: {
							lineWidthPlus: 1,
							marker: {},
							halo: {
								size: 10,
								opacity: .25
							}
						},
						select: {
							marker: {}
						}
					},
					stickyTracking: !0,
					turboThreshold: 1e3
				}
			},
			labels: {
				style: {
					position: "absolute",
					color: "#3E576F"
				}
			},
			legend: {
				enabled: !0,
				align: "center",
				layout: "horizontal",
				labelFormatter: function() {
					return this.name
				},
				borderColor: "#909090",
				borderRadius: 0,
				navigation: {
					activeColor: "#274b6d",
					inactiveColor: "#CCC"
				},
				shadow: !1,
				itemStyle: {
					color: "#333333",
					fontSize: "12px",
					fontWeight: "bold"
				},
				itemHoverStyle: {
					color: "#000"
				},
				itemHiddenStyle: {
					color: "#CCC"
				},
				itemCheckboxStyle: {
					position: "absolute",
					width: "13px",
					height: "13px"
				},
				symbolPadding: 5,
				verticalAlign: "bottom",
				x: 0,
				y: 0,
				title: {
					style: {
						fontWeight: "bold"
					}
				}
			},
			loading: {
				labelStyle: {
					fontWeight: "bold",
					position: "relative",
					top: "45%"
				},
				style: {
					position: "absolute",
					backgroundColor: "white",
					opacity: .5,
					textAlign: "center"
				}
			},
			tooltip: {
				enabled: !0,
				animation: Ca,
				backgroundColor: "rgba(249, 249, 249, .85)",
				borderWidth: 1,
				borderRadius: 3,
				dateTimeLabelFormats: {
					millisecond: "%A, %b %e, %H:%M:%S.%L",
					second: "%A, %b %e, %H:%M:%S",
					minute: "%A, %b %e, %H:%M",
					hour: "%A, %b %e, %H:%M",
					day: "%A, %b %e, %Y",
					week: "Week from %A, %b %e, %Y",
					month: "%B %Y",
					year: "%Y"
				},
				headerFormat: '<span style="font-size: 10px">{point.key}</span><br/>',
				pointFormat: '<span style="color:{series.color}">●</span> {series.name}: <b>{point.y}</b><br/>',
				shadow: !0,
				snap: Aa ? 25 : 10,
				style: {
					color: "#333333",
					cursor: "default",
					fontSize: "12px",
					padding: "8px",
					whiteSpace: "nowrap"
				}
			},
			credits: {
				enabled: !0,
				text: "Highcharts.com",
				href: "http://www.highcharts.com",
				position: {
					align: "right",
					x: -10,
					verticalAlign: "bottom",
					y: -5
				},
				style: {
					cursor: "pointer",
					color: "#909090",
					fontSize: "9px"
				}
			}
		};
		var cb = O.plotOptions,
			Pa = cb.line;
		E();
		var db = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]?(?:\.[0-9]+)?)\s*\)/,
			eb = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/,
			fb = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/,
			gb = function(a) {
				var d, e, f = [];
				return function(a) {
					a && a.stops ? e = Xa(a.stops, function(a) {
						return gb(a[1])
					}) : (d = db.exec(a)) ? f = [c(d[1]), c(d[2]), c(d[3]), parseFloat(d[4], 10)] : (d = eb.exec(a)) ? f = [c(d[1], 16), c(d[2], 16), c(d[3], 16), 1] : (d = fb.exec(a)) && (f = [c(d[1]), c(d[2]), c(d[3]), 1])
				}(a), {
					get: function(c) {
						var d;
						return e ? (d = b(a), d.stops = [].concat(d.stops), Ua(e, function(a, b) {
							d.stops[b] = [d.stops[b][0], a.get(c)]
						})) : d = f && !isNaN(f[0]) ? "rgb" === c ? "rgb(" + f[0] + "," + f[1] + "," + f[2] + ")" : "a" === c ? f[3] : "rgba(" + f.join(",") + ")" : a, d
					},
					brighten: function(a) {
						if (e) Ua(e, function(b) {
							b.brighten(a)
						});
						else if (g(a) && 0 !== a) {
							var b;
							for (b = 0; 3 > b; b++) f[b] += c(255 * a), f[b] < 0 && (f[b] = 0), f[b] > 255 && (f[b] = 255)
						}
						return this
					},
					rgba: f,
					setOpacity: function(a) {
						return f[3] = a, this
					}
				}
			};
		F.prototype = {
			opacity: 1,
			textProps: "fontSize,fontWeight,fontFamily,color,lineHeight,width,textDecoration,textShadow,HcTextStroke".split(","),
			init: function(a, b) {
				this.element = "span" === b ? p(b) : ha.createElementNS(Ba, b), this.renderer = a
			},
			animate: function(a, c, d) {
				return c = n(c, Q, !0), bb(this), c ? (c = b(c, {}), d && (c.complete = d), ab(this, a, c)) : (this.attr(a), d && d()), this
			},
			colorGradient: function(a, c, d) {
				var e, g, h, i, j, l, m, n, o, p, q = this.renderer,
					r = [];
				if (a.linearGradient ? g = "linearGradient" : a.radialGradient && (g = "radialGradient"), g) {
					h = a[g], i = q.gradients, l = a.stops, o = d.radialReference, f(h) && (a[g] = h = {
						x1: h[0],
						y1: h[1],
						x2: h[2],
						y2: h[3],
						gradientUnits: "userSpaceOnUse"
					}), "radialGradient" === g && o && !k(h.gradientUnits) && (h = b(h, {
						cx: o[0] - o[2] / 2 + h.cx * o[2],
						cy: o[1] - o[2] / 2 + h.cy * o[2],
						r: h.r * o[2],
						gradientUnits: "userSpaceOnUse"
					}));
					for (p in h)"id" !== p && r.push(p, h[p]);
					for (p in l) r.push(l[p]);
					r = r.join(","), i[r] ? a = i[r].attr("id") : (h.id = a = "highcharts-" + Ga++, i[r] = j = q.createElement(g).attr(h).add(q.defs), j.stops = [], Ua(l, function(a) {
						0 === a[1].indexOf("rgba") ? (e = gb(a[1]), m = e.get("rgb"), n = e.get("a")) : (m = a[1], n = 1), a = q.createElement("stop").attr({
							offset: a[0],
							"stop-color": m,
							"stop-opacity": n
						}).add(j), j.stops.push(a)
					})), d.setAttribute(c, "url(" + q.url + "#" + a + ")")
				}
			},
			attr: function(a, b) {
				var c, d, e, f, g = this.element,
					h = this;
				if ("string" == typeof a && b !== K && (c = a, a = {}, a[c] = b), "string" == typeof a) h = (this[a + "Getter"] || this._defaultGetter).call(this, a, g);
				else {
					for (c in a) d = a[c], f = !1, this.symbolName && /^(x|y|width|height|r|start|end|innerR|anchorX|anchorY)/.test(c) && (e || (this.symbolAttr(a), e = !0), f = !0), !this.rotation || "x" !== c && "y" !== c || (this.doTransform = !0), f || (this[c + "Setter"] || this._defaultSetter).call(this, d, c, g), this.shadows && /^(width|height|visibility|x|y|d|transform|cx|cy|r)$/.test(c) && this.updateShadows(c, d);
					this.doTransform && (this.updateTransform(), this.doTransform = !1)
				}
				return h
			},
			updateShadows: function(a, b) {
				for (var c = this.shadows, d = c.length; d--;) c[d].setAttribute(a, "height" === a ? na(b - (c[d].cutHeight || 0), 0) : "d" === a ? this.d : b)
			},
			addClass: function(a) {
				var b = this.element,
					c = l(b, "class") || "";
				return -1 === c.indexOf(a) && l(b, "class", c + " " + a), this
			},
			symbolAttr: function(a) {
				var b = this;
				Ua("x,y,r,start,end,width,height,innerR,anchorX,anchorY".split(","), function(c) {
					b[c] = n(a[c], b[c])
				}), b.attr({
					d: b.renderer.symbols[b.symbolName](b.x, b.y, b.width, b.height, b)
				})
			},
			clip: function(a) {
				return this.attr("clip-path", a ? "url(" + this.renderer.url + "#" + a.id + ")" : La)
			},
			crisp: function(a) {
				var b, c, d = {},
					e = a.strokeWidth || this.strokeWidth || 0;
				c = ka(e) % 2 / 2, a.x = la(a.x || this.x || 0) + c, a.y = la(a.y || this.y || 0) + c, a.width = la((a.width || this.width || 0) - 2 * c), a.height = la((a.height || this.height || 0) - 2 * c), a.strokeWidth = e;
				for (b in a) this[b] !== a[b] && (this[b] = d[b] = a[b]);
				return d
			},
			css: function(b) {
				var d, e, f = this.styles,
					g = {},
					h = this.element,
					i = "";
				if (d = !f, b && b.color && (b.fill = b.color), f) for (e in b) b[e] !== f[e] && (g[e] = b[e], d = !0);
				if (d) {
					if (d = this.textWidth = b && b.width && "text" === h.nodeName.toLowerCase() && c(b.width), f && (b = a(f, g)), this.styles = b, d && (Ea || !Ca && this.renderer.forExport) && delete b.width, wa && !Ca) o(this.element, b);
					else {
						f = function(a, b) {
							return "-" + b.toLowerCase()
						};
						for (e in b) i += e.replace(/([A-Z])/g, f) + ":" + b[e] + ";";
						l(h, "style", i)
					}
					d && this.added && this.renderer.buildText(this)
				}
				return this
			},
			on: function(a, b) {
				var c = this,
					d = c.element;
				return M && "click" === a ? (d.ontouchstart = function(a) {
					c.touchEventFired = U.now(), a.preventDefault(), b.call(d, a)
				}, d.onclick = function(a) {
					(-1 === ua.indexOf("Android") || U.now() - (c.touchEventFired || 0) > 1100) && b.call(d, a)
				}) : d["on" + a] = b, this
			},
			setRadialReference: function(a) {
				return this.element.radialReference = a, this
			},
			translate: function(a, b) {
				return this.attr({
					translateX: a,
					translateY: b
				})
			},
			invert: function() {
				return this.inverted = !0, this.updateTransform(), this
			},
			updateTransform: function() {
				var a = this.translateX || 0,
					b = this.translateY || 0,
					c = this.scaleX,
					d = this.scaleY,
					e = this.inverted,
					f = this.rotation,
					g = this.element;
				e && (a += this.attr("width"), b += this.attr("height")), a = ["translate(" + a + "," + b + ")"], e ? a.push("rotate(90) scale(-1,1)") : f && a.push("rotate(" + f + " " + (g.getAttribute("x") || 0) + " " + (g.getAttribute("y") || 0) + ")"), (k(c) || k(d)) && a.push("scale(" + n(c, 1) + " " + n(d, 1) + ")"), a.length && g.setAttribute("transform", a.join(" "))
			},
			toFront: function() {
				var a = this.element;
				return a.parentNode.appendChild(a), this
			},
			align: function(a, b, c) {
				var e, f, g, h, i = {};
				return f = this.renderer, g = f.alignedObjects, a ? (this.alignOptions = a, this.alignByTranslate = b, (!c || d(c)) && (this.alignTo = e = c || "renderer", j(g, this), g.push(this), c = null)) : (a = this.alignOptions, b = this.alignByTranslate, e = this.alignTo), c = n(c, f[e], f), e = a.align, f = a.verticalAlign, g = (c.x || 0) + (a.x || 0), h = (c.y || 0) + (a.y || 0), ("right" === e || "center" === e) && (g += (c.width - (a.width || 0)) / {
					right: 1,
					center: 2
				}[e]), i[b ? "translateX" : "x"] = ka(g), ("bottom" === f || "middle" === f) && (h += (c.height - (a.height || 0)) / ({
					bottom: 1,
					middle: 2
				}[f] || 1)), i[b ? "translateY" : "y"] = ka(h), this[this.placed ? "animate" : "attr"](i), this.placed = !0, this.alignAttr = i, this
			},
			getBBox: function() {
				var b, c, d = this.bBox,
					e = this.renderer,
					f = this.rotation;
				b = this.element;
				var g = this.styles,
					h = f * ta;
				c = this.textStr;
				var i;
				if (("" === c || Ma.test(c)) && (i = "num." + c.toString().length + (g ? "|" + g.fontSize + "|" + g.fontFamily : "")), i && (d = e.cache[i]), !d) {
					if (b.namespaceURI === Ba || e.forExport) {
						try {
							d = b.getBBox ? a({}, b.getBBox()) : {
								width: b.offsetWidth,
								height: b.offsetHeight
							}
						} catch (j) {}(!d || d.width < 0) && (d = {
							width: 0,
							height: 0
						})
					} else d = this.htmlGetBBox();
					e.isSVG && (b = d.width, c = d.height, wa && g && "11px" === g.fontSize && "16.9" === c.toPrecision(3) && (d.height = c = 14), f && (d.width = pa(c * ra(h)) + pa(b * qa(h)), d.height = pa(c * qa(h)) + pa(b * ra(h)))), this.bBox = d, i && (e.cache[i] = d)
				}
				return d
			},
			show: function(a) {
				return a && this.element.namespaceURI === Ba ? this.element.removeAttribute("visibility") : this.attr({
					visibility: a ? "inherit" : "visible"
				}), this
			},
			hide: function() {
				return this.attr({
					visibility: "hidden"
				})
			},
			fadeOut: function(a) {
				var b = this;
				b.animate({
					opacity: 0
				}, {
					duration: a || 150,
					complete: function() {
						b.attr({
							y: -9999
						})
					}
				})
			},
			add: function(a) {
				var b, d, e = this.renderer,
					f = a || e,
					g = f.element || e.box,
					h = this.element,
					i = this.zIndex;
				if (a && (this.parentGroup = a), this.parentInverted = a && a.inverted, void 0 !== this.textStr && e.buildText(this), i && (f.handleZ = !0, i = c(i)), f.handleZ) for (a = g.childNodes, b = 0; b < a.length; b++) if (e = a[b], f = l(e, "zIndex"), e !== h && (c(f) > i || !k(i) && k(f))) {
					g.insertBefore(h, e), d = !0;
					break
				}
				return d || g.appendChild(h), this.added = !0, this.onAdd && this.onAdd(), this
			},
			safeRemoveChild: function(a) {
				var b = a.parentNode;
				b && b.removeChild(a)
			},
			destroy: function() {
				var a, b, c = this,
					d = c.element || {},
					e = c.shadows,
					f = c.renderer.isSVG && "SPAN" === d.nodeName && c.parentGroup;
				if (d.onclick = d.onmouseout = d.onmouseover = d.onmousemove = d.point = null, bb(c), c.clipPath && (c.clipPath = c.clipPath.destroy()), c.stops) {
					for (b = 0; b < c.stops.length; b++) c.stops[b] = c.stops[b].destroy();
					c.stops = null
				}
				for (c.safeRemoveChild(d), e && Ua(e, function(a) {
					c.safeRemoveChild(a)
				}); f && f.div && 0 === f.div.childNodes.length;) d = f.parentGroup, c.safeRemoveChild(f.div), delete f.div, f = d;
				c.alignTo && j(c.renderer.alignedObjects, c);
				for (a in c) delete c[a];
				return null
			},
			shadow: function(a, b, c) {
				var d, e, f, g, h, i, j = [],
					k = this.element;
				if (a) {
					for (g = n(a.width, 3), h = (a.opacity || .15) / g, i = this.parentInverted ? "(-1,-1)" : "(" + n(a.offsetX, 1) + ", " + n(a.offsetY, 1) + ")", d = 1; g >= d; d++) e = k.cloneNode(0), f = 2 * g + 1 - 2 * d, l(e, {
						isShadow: "true",
						stroke: a.color || "black",
						"stroke-opacity": h * d,
						"stroke-width": f,
						transform: "translate" + i,
						fill: La
					}), c && (l(e, "height", na(l(e, "height") - f, 0)), e.cutHeight = f), b ? b.element.appendChild(e) : k.parentNode.insertBefore(e, k), j.push(e);
					this.shadows = j
				}
				return this
			},
			xGetter: function(a) {
				return "circle" === this.element.nodeName && (a = {
					x: "cx",
					y: "cy"
				}[a] || a), this._defaultGetter(a)
			},
			_defaultGetter: function(a) {
				return a = n(this[a], this.element ? this.element.getAttribute(a) : null, 0), /^[\-0-9\.]+$/.test(a) && (a = parseFloat(a)), a
			},
			dSetter: function(a, b, c) {
				a && a.join && (a = a.join(" ")), /(NaN| {2}|^$)/.test(a) && (a = "M 0 0"), c.setAttribute(b, a), this[b] = a
			},
			dashstyleSetter: function(a) {
				var b;
				if (a = a && a.toLowerCase()) {
					for (a = a.replace("shortdashdotdot", "3,1,1,1,1,1,").replace("shortdashdot", "3,1,1,1").replace("shortdot", "1,1,").replace("shortdash", "3,1,").replace("longdash", "8,3,").replace(/dot/g, "1,3,").replace("dash", "4,3,").replace(/,$/, "").split(","), b = a.length; b--;) a[b] = c(a[b]) * this["stroke-width"];
					a = a.join(",").replace("NaN", "none"), this.element.setAttribute("stroke-dasharray", a)
				}
			},
			alignSetter: function(a) {
				this.element.setAttribute("text-anchor", {
					left: "start",
					center: "middle",
					right: "end"
				}[a])
			},
			opacitySetter: function(a, b, c) {
				this[b] = a, c.setAttribute(b, a)
			},
			titleSetter: function(a) {
				var b = this.element.getElementsByTagName("title")[0];
				b || (b = ha.createElementNS(Ba, "title"), this.element.appendChild(b)), b.textContent = n(a, "").replace(/<[^>]*>/g, "")
			},
			textSetter: function(a) {
				a !== this.textStr && (delete this.bBox, this.textStr = a, this.added && this.renderer.buildText(this))
			},
			fillSetter: function(a, b, c) {
				"string" == typeof a ? c.setAttribute(b, a) : a && this.colorGradient(a, b, c)
			},
			zIndexSetter: function(a, b, c) {
				c.setAttribute(b, a), this[b] = a
			},
			_defaultSetter: function(a, b, c) {
				c.setAttribute(b, a)
			}
		}, F.prototype.yGetter = F.prototype.xGetter, F.prototype.translateXSetter = F.prototype.translateYSetter = F.prototype.rotationSetter = F.prototype.verticalAlignSetter = F.prototype.scaleXSetter = F.prototype.scaleYSetter = function(a, b) {
			this[b] = a, this.doTransform = !0
		}, F.prototype["stroke-widthSetter"] = F.prototype.strokeSetter = function(a, b, c) {
			this[b] = a, this.stroke && this["stroke-width"] ? (this.strokeWidth = this["stroke-width"], F.prototype.fillSetter.call(this, this.stroke, "stroke", c), c.setAttribute("stroke-width", this["stroke-width"]), this.hasStroke = !0) : "stroke-width" === b && 0 === a && this.hasStroke && (c.removeAttribute("stroke"), this.hasStroke = !1)
		};
		var hb = function() {
				this.init.apply(this, arguments)
			};
		hb.prototype = {
			Element: F,
			init: function(a, b, c, d, e) {
				var f, g = location,
					d = this.createElement("svg").attr({
						version: "1.1"
					}).css(this.getStyle(d));
				f = d.element, a.appendChild(f), -1 === a.innerHTML.indexOf("xmlns") && l(f, "xmlns", Ba), this.isSVG = !0, this.box = f, this.boxWrapper = d, this.alignedObjects = [], this.url = (za || ya) && ha.getElementsByTagName("base").length ? g.href.replace(/#.*?$/, "").replace(/([\('\)])/g, "\\$1").replace(/ /g, "%20") : "", this.createElement("desc").add().element.appendChild(ha.createTextNode("Created with Highcharts 4.0.4")), this.defs = this.createElement("defs").add(), this.forExport = e, this.gradients = {}, this.cache = {}, this.setSize(b, c, !1);
				var h;
				za && a.getBoundingClientRect && (this.subPixelFix = b = function() {
					o(a, {
						left: 0,
						top: 0
					}), h = a.getBoundingClientRect(), o(a, {
						left: ma(h.left) - h.left + "px",
						top: ma(h.top) - h.top + "px"
					})
				}, b(), Ya(ia, "resize", b))
			},
			getStyle: function(b) {
				return this.style = a({
					fontFamily: '"Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, sans-serif',
					fontSize: "12px"
				}, b)
			},
			isHidden: function() {
				return !this.boxWrapper.getBBox().width
			},
			destroy: function() {
				var a = this.defs;
				return this.box = null, this.boxWrapper = this.boxWrapper.destroy(), A(this.gradients || {}), this.gradients = null, a && (this.defs = a.destroy()), this.subPixelFix && Za(ia, "resize", this.subPixelFix), this.alignedObjects = null
			},
			createElement: function(a) {
				var b = new this.Element;
				return b.init(this, a), b
			},
			draw: function() {},
			buildText: function(a) {
				for (var b, d, e = a.element, f = this, g = f.forExport, h = n(a.textStr, "").toString(), i = -1 !== h.indexOf("<"), j = e.childNodes, k = l(e, "x"), m = a.styles, p = a.textWidth, q = m && m.lineHeight, r = m && m.HcTextStroke, s = j.length, t = function(a) {
						return q ? c(q) : f.fontMetrics(/(px|em)$/.test(a && a.style.fontSize) ? a.style.fontSize : m && m.fontSize || f.style.fontSize || 12, a).h
					}; s--;) e.removeChild(j[s]);
				i || r || -1 !== h.indexOf(" ") ? (b = /<.*style="([^"]+)".*>/, d = /<.*href="(http[^"]+)".*>/, p && !a.added && this.box.appendChild(e), h = i ? h.replace(/<(b|strong)>/g, '<span style="font-weight:bold">').replace(/<(i|em)>/g, '<span style="font-style:italic">').replace(/<a/g, "<span").replace(/<\/(b|strong|i|em|a)>/g, "</span>").split(/<br.*?>/g) : [h], "" === h[h.length - 1] && h.pop(), Ua(h, function(c, h) {
					var i, j = 0,
						c = c.replace(/<span/g, "|||<span").replace(/<\/span>/g, "</span>|||");
					i = c.split("|||"), Ua(i, function(c) {
						if ("" !== c || 1 === i.length) {
							var n, q = {},
								r = ha.createElementNS(Ba, "tspan");
							if (b.test(c) && (n = c.match(b)[1].replace(/(;| |^)color([ :])/, "$1fill$2"), l(r, "style", n)), d.test(c) && !g && (l(r, "onclick", 'location.href="' + c.match(d)[1] + '"'), o(r, {
								cursor: "pointer"
							})), c = (c.replace(/<(.|\n)*?>/g, "") || " ").replace(/&lt;/g, "<").replace(/&gt;/g, ">"), " " !== c) {
								if (r.appendChild(ha.createTextNode(c)), j ? q.dx = 0 : h && null !== k && (q.x = k), l(r, q), e.appendChild(r), !j && h && (!Ca && g && o(r, {
									display: "block"
								}), l(r, "dy", t(r))), p) for (var s, u, c = c.replace(/([^\^])-/g, "$1- ").split(" "), q = i.length > 1 || c.length > 1 && "nowrap" !== m.whiteSpace, v = m.HcHeight, w = [], x = t(r), y = 1; q && (c.length || w.length);) delete a.bBox, s = a.getBBox(), u = s.width, !Ca && f.forExport && (u = f.measureSpanWidth(r.firstChild.data, a.styles)), s = u > p, s && 1 !== c.length ? (r.removeChild(r.firstChild), w.unshift(c.pop())) : (c = w, w = [], c.length && (y++, v && y * x > v ? (c = ["..."], a.attr("title", a.textStr)) : (r = ha.createElementNS(Ba, "tspan"), l(r, {
									dy: x,
									x: k
								}), n && l(r, "style", n), e.appendChild(r))), u > p && (p = u)), c.length && r.appendChild(ha.createTextNode(c.join(" ").replace(/- /g, "-")));
								j++
							}
						}
					})
				})) : e.appendChild(ha.createTextNode(h))
			},
			button: function(c, d, e, f, g, h, i, j, k) {
				var l, m, n, o, p, q, r = this.label(c, d, e, k, null, null, null, null, "button"),
					s = 0,
					c = {
						x1: 0,
						y1: 0,
						x2: 0,
						y2: 1
					},
					g = b({
						"stroke-width": 1,
						stroke: "#CCCCCC",
						fill: {
							linearGradient: c,
							stops: [
								[0, "#FEFEFE"],
								[1, "#F6F6F6"]
							]
						},
						r: 2,
						padding: 5,
						style: {
							color: "black"
						}
					}, g);
				return n = g.style, delete g.style, h = b(g, {
					stroke: "#68A",
					fill: {
						linearGradient: c,
						stops: [
							[0, "#FFF"],
							[1, "#ACF"]
						]
					}
				}, h), o = h.style, delete h.style, i = b(g, {
					stroke: "#68A",
					fill: {
						linearGradient: c,
						stops: [
							[0, "#9BD"],
							[1, "#CDF"]
						]
					}
				}, i), p = i.style, delete i.style, j = b(g, {
					style: {
						color: "#CCC"
					}
				}, j), q = j.style, delete j.style, Ya(r.element, wa ? "mouseover" : "mouseenter", function() {
					3 !== s && r.attr(h).css(o)
				}), Ya(r.element, wa ? "mouseout" : "mouseleave", function() {
					3 !== s && (l = [g, h, i][s], m = [n, o, p][s], r.attr(l).css(m))
				}), r.setState = function(a) {
					(r.state = s = a) ? 2 === a ? r.attr(i).css(p) : 3 === a && r.attr(j).css(q) : r.attr(g).css(n)
				}, r.on("click", function() {
					3 !== s && f.call(r)
				}).attr(g).css(a({
					cursor: "default"
				}, n))
			},
			crispLine: function(a, b) {
				return a[1] === a[4] && (a[1] = a[4] = ka(a[1]) - b % 2 / 2), a[2] === a[5] && (a[2] = a[5] = ka(a[2]) + b % 2 / 2), a
			},
			path: function(b) {
				var c = {
					fill: La
				};
				return f(b) ? c.d = b : e(b) && a(c, b), this.createElement("path").attr(c)
			},
			circle: function(a, b, c) {
				return a = e(a) ? a : {
					x: a,
					y: b,
					r: c
				}, b = this.createElement("circle"), b.xSetter = function(a) {
					this.element.setAttribute("cx", a)
				}, b.ySetter = function(a) {
					this.element.setAttribute("cy", a)
				}, b.attr(a)
			},
			arc: function(a, b, c, d, f, g) {
				return e(a) && (b = a.y, c = a.r, d = a.innerR, f = a.start, g = a.end, a = a.x), a = this.symbol("arc", a || 0, b || 0, c || 0, c || 0, {
					innerR: d || 0,
					start: f || 0,
					end: g || 0
				}), a.r = c, a
			},
			rect: function(a, b, c, d, f, g) {
				var f = e(a) ? a.r : f,
					h = this.createElement("rect"),
					a = e(a) ? a : a === K ? {} : {
						x: a,
						y: b,
						width: na(c, 0),
						height: na(d, 0)
					};
				return g !== K && (a.strokeWidth = g, a = h.crisp(a)), f && (a.r = f), h.rSetter = function(a) {
					l(this.element, {
						rx: a,
						ry: a
					})
				}, h.attr(a)
			},
			setSize: function(a, b, c) {
				var d = this.alignedObjects,
					e = d.length;
				for (this.width = a, this.height = b, this.boxWrapper[n(c, !0) ? "animate" : "attr"]({
					width: a,
					height: b
				}); e--;) d[e].align()
			},
			g: function(a) {
				var b = this.createElement("g");
				return k(a) ? b.attr({
					"class": "highcharts-" + a
				}) : b
			},
			image: function(b, c, d, e, f) {
				var g = {
					preserveAspectRatio: La
				};
				return arguments.length > 1 && a(g, {
					x: c,
					y: d,
					width: e,
					height: f
				}), g = this.createElement("image").attr(g), g.element.setAttributeNS ? g.element.setAttributeNS("http://www.w3.org/1999/xlink", "href", b) : g.element.setAttribute("hc-svg-href", b), g
			},
			symbol: function(b, c, d, e, f, g) {
				var h, i, j, k = this.symbols[b],
					k = k && k(ka(c), ka(d), e, f, g),
					l = /^url\((.*?)\)$/;
				return k ? (h = this.path(k), a(h, {
					symbolName: b,
					x: c,
					y: d,
					width: e,
					height: f
				}), g && a(h, g)) : l.test(b) && (j = function(a, b) {
					a.element && (a.attr({
						width: b[0],
						height: b[1]
					}), a.alignByTranslate || a.translate(ka((e - b[0]) / 2), ka((f - b[1]) / 2)))
				}, i = b.match(l)[1], b = Fa[i] || g && g.width && g.height && [g.width, g.height], h = this.image(i).attr({
					x: c,
					y: d
				}), h.isImg = !0, b ? j(h, b) : (h.attr({
					width: 0,
					height: 0
				}), p("img", {
					onload: function() {
						j(h, Fa[i] = [this.width, this.height])
					},
					src: i
				}))), h
			},
			symbols: {
				circle: function(a, b, c, d) {
					var e = .166 * c;
					return ["M", a + c / 2, b, "C", a + c + e, b, a + c + e, b + d, a + c / 2, b + d, "C", a - e, b + d, a - e, b, a + c / 2, b, "Z"]
				},
				square: function(a, b, c, d) {
					return ["M", a, b, "L", a + c, b, a + c, b + d, a, b + d, "Z"]
				},
				triangle: function(a, b, c, d) {
					return ["M", a + c / 2, b, "L", a + c, b + d, a, b + d, "Z"]
				},
				"triangle-down": function(a, b, c, d) {
					return ["M", a, b, "L", a + c, b, a + c / 2, b + d, "Z"]
				},
				diamond: function(a, b, c, d) {
					return ["M", a + c / 2, b, "L", a + c, b + d / 2, a + c / 2, b + d, a, b + d / 2, "Z"]
				},
				arc: function(a, b, c, d, e) {
					var f = e.start,
						c = e.r || c || d,
						g = e.end - .001,
						d = e.innerR,
						h = e.open,
						i = qa(f),
						j = ra(f),
						k = qa(g),
						g = ra(g),
						e = e.end - f < sa ? 0 : 1;
					return ["M", a + c * i, b + c * j, "A", c, c, 0, e, 1, a + c * k, b + c * g, h ? "M" : "L", a + d * k, b + d * g, "A", d, d, 0, e, 0, a + d * i, b + d * j, h ? "" : "Z"]
				},
				callout: function(a, b, c, d, e) {
					var f = oa(e && e.r || 0, c, d),
						g = f + 6,
						h = e && e.anchorX,
						i = e && e.anchorY,
						e = ka(e.strokeWidth || 0) % 2 / 2;
					return a += e, b += e, e = ["M", a + f, b, "L", a + c - f, b, "C", a + c, b, a + c, b, a + c, b + f, "L", a + c, b + d - f, "C", a + c, b + d, a + c, b + d, a + c - f, b + d, "L", a + f, b + d, "C", a, b + d, a, b + d, a, b + d - f, "L", a, b + f, "C", a, b, a, b, a + f, b], h && h > c && i > b + g && b + d - g > i ? e.splice(13, 3, "L", a + c, i - 6, a + c + 6, i, a + c, i + 6, a + c, b + d - f) : h && 0 > h && i > b + g && b + d - g > i ? e.splice(33, 3, "L", a, i + 6, a - 6, i, a, i - 6, a, b + f) : i && i > d && h > a + g && a + c - g > h ? e.splice(23, 3, "L", h + 6, b + d, h, b + d + 6, h - 6, b + d, a + f, b + d) : i && 0 > i && h > a + g && a + c - g > h && e.splice(3, 3, "L", h - 6, b, h, b - 6, h + 6, b, c - f, b), e
				}
			},
			clipRect: function(a, b, c, d) {
				var e = "highcharts-" + Ga++,
					f = this.createElement("clipPath").attr({
						id: e
					}).add(this.defs),
					a = this.rect(a, b, c, d, 0).add(f);
				return a.id = e, a.clipPath = f, a
			},
			text: function(a, b, c, d) {
				var e = Ea || !Ca && this.forExport,
					f = {};
				return d && !this.forExport ? this.html(a, b, c) : (f.x = Math.round(b || 0), c && (f.y = Math.round(c)), (a || 0 === a) && (f.text = a), a = this.createElement("text").attr(f), e && a.css({
					position: "absolute"
				}), d || (a.xSetter = function(a, b, c) {
					var d, e, f = c.getElementsByTagName("tspan"),
						g = c.getAttribute(b);
					for (e = 0; e < f.length; e++) d = f[e], d.getAttribute(b) === g && d.setAttribute(b, a);
					c.setAttribute(b, a)
				}), a)
			},
			fontMetrics: function(a, b) {
				a = a || this.style.fontSize, b && ia.getComputedStyle && (b = b.element || b, a = ia.getComputedStyle(b, "").fontSize);
				var a = /px/.test(a) ? c(a) : /em/.test(a) ? 12 * parseFloat(a) : 12,
					d = 24 > a ? a + 4 : ka(1.2 * a),
					e = ka(.8 * d);
				return {
					h: d,
					b: e,
					f: a
				}
			},
			label: function(c, d, e, f, g, h, i, j, l) {
				function m() {
					var b, c;
					b = z.element.style, q = (void 0 === r || void 0 === s || y.styles.textAlign) && z.textStr && z.getBBox(), y.width = (r || q.width || 0) + 2 * B + C, y.height = (s || q.height || 0) + 2 * B, v = B + x.fontMetrics(b && b.fontSize, z).b, w && (p || (b = ka(-A * B), c = j ? -v : 0, y.box = p = f ? x.symbol(f, b, c, y.width, y.height, E) : x.rect(b, c, y.width, y.height, 0, E[Na]), p.attr("fill", La).add(y)), p.isImg || p.attr(a({
						width: ka(y.width),
						height: ka(y.height)
					}, E)), E = null)
				}
				function n() {
					var a, b = y.styles,
						b = b && b.textAlign,
						c = C + B * (1 - A);
					a = j ? 0 : v, k(r) && q && ("center" === b || "right" === b) && (c += {
						center: .5,
						right: 1
					}[b] * (r - q.width)), (c !== z.x || a !== z.y) && (z.attr("x", c), a !== K && z.attr("y", a)), z.x = c, z.y = a
				}
				function o(a, b) {
					p ? p.attr(a, b) : E[a] = b
				}
				var p, q, r, s, t, u, v, w, x = this,
					y = x.g(l),
					z = x.text("", 0, 0, i).attr({
						zIndex: 1
					}),
					A = 0,
					B = 3,
					C = 0,
					D = 0,
					E = {};
				y.onAdd = function() {
					z.add(y), y.attr({
						text: c || 0 === c ? c : "",
						x: d,
						y: e
					}), p && k(g) && y.attr({
						anchorX: g,
						anchorY: h
					})
				}, y.widthSetter = function(a) {
					r = a
				}, y.heightSetter = function(a) {
					s = a
				}, y.paddingSetter = function(a) {
					k(a) && a !== B && (B = a, n())
				}, y.paddingLeftSetter = function(a) {
					k(a) && a !== C && (C = a, n())
				}, y.alignSetter = function(a) {
					A = {
						left: 0,
						center: .5,
						right: 1
					}[a]
				}, y.textSetter = function(a) {
					a !== K && z.textSetter(a), m(), n()
				}, y["stroke-widthSetter"] = function(a, b) {
					a && (w = !0), D = a % 2 / 2, o(b, a)
				}, y.strokeSetter = y.fillSetter = y.rSetter = function(a, b) {
					"fill" === b && a && (w = !0), o(b, a)
				}, y.anchorXSetter = function(a, b) {
					g = a, o(b, a + D - t)
				}, y.anchorYSetter = function(a, b) {
					h = a, o(b, a - u)
				}, y.xSetter = function(a) {
					y.x = a, A && (a -= A * ((r || q.width) + B)), t = ka(a), y.attr("translateX", t)
				}, y.ySetter = function(a) {
					u = y.y = ka(a), y.attr("translateY", u)
				};
				var G = y.css;
				return a(y, {
					css: function(a) {
						if (a) {
							var c = {},
								a = b(a);
							Ua(y.textProps, function(b) {
								a[b] !== K && (c[b] = a[b], delete a[b])
							}), z.css(c)
						}
						return G.call(y, a)
					},
					getBBox: function() {
						return {
							width: q.width + 2 * B,
							height: q.height + 2 * B,
							x: q.x - B,
							y: q.y - B
						}
					},
					shadow: function(a) {
						return p && p.shadow(a), y
					},
					destroy: function() {
						Za(y.element, "mouseenter"), Za(y.element, "mouseleave"), z && (z = z.destroy()), p && (p = p.destroy()), F.prototype.destroy.call(y), y = x = m = n = o = null
					}
				})
			}
		}, L = hb, a(F.prototype, {
			htmlCss: function(b) {
				var c = this.element;
				return (c = b && "SPAN" === c.tagName && b.width) && (delete b.width, this.textWidth = c, this.updateTransform()), this.styles = a(this.styles, b), o(this.element, b), this
			},
			htmlGetBBox: function() {
				var a = this.element,
					b = this.bBox;
				return b || ("text" === a.nodeName && (a.style.position = "absolute"), b = this.bBox = {
					x: a.offsetLeft,
					y: a.offsetTop,
					width: a.offsetWidth,
					height: a.offsetHeight
				}), b
			},
			htmlUpdateTransform: function() {
				if (this.added) {
					var a = this.renderer,
						b = this.element,
						d = this.translateX || 0,
						e = this.translateY || 0,
						f = this.x || 0,
						g = this.y || 0,
						h = this.textAlign || "left",
						i = {
							left: 0,
							center: .5,
							right: 1
						}[h],
						j = this.shadows;
					if (o(b, {
						marginLeft: d,
						marginTop: e
					}), j && Ua(j, function(a) {
						o(a, {
							marginLeft: d + 1,
							marginTop: e + 1
						})
					}), this.inverted && Ua(b.childNodes, function(c) {
						a.invertChild(c, b)
					}), "SPAN" === b.tagName) {
						var l, m = this.rotation,
							p = c(this.textWidth),
							q = [m, h, b.innerHTML, this.textWidth].join(",");
						q !== this.cTT && (l = a.fontMetrics(b.style.fontSize).b, k(m) && this.setSpanRotation(m, i, l), j = n(this.elemWidth, b.offsetWidth), j > p && /[ \-]/.test(b.textContent || b.innerText) && (o(b, {
							width: p + "px",
							display: "block",
							whiteSpace: "normal"
						}), j = p), this.getSpanCorrection(j, l, i, m, h)), o(b, {
							left: f + (this.xCorr || 0) + "px",
							top: g + (this.yCorr || 0) + "px"
						}), ya && (l = b.offsetHeight), this.cTT = q
					}
				} else this.alignOnAdd = !0
			},
			setSpanRotation: function(a, b, c) {
				var d = {},
					e = wa ? "-ms-transform" : ya ? "-webkit-transform" : za ? "MozTransform" : va ? "-o-transform" : "";
				d[e] = d.transform = "rotate(" + a + "deg)", d[e + (za ? "Origin" : "-origin")] = d.transformOrigin = 100 * b + "% " + c + "px", o(this.element, d)
			},
			getSpanCorrection: function(a, b, c) {
				this.xCorr = -a * c, this.yCorr = -b
			}
		}), a(hb.prototype, {
			html: function(b, c, d) {
				var e = this.createElement("span"),
					f = e.element,
					g = e.renderer;
				return e.textSetter = function(a) {
					a !== f.innerHTML && delete this.bBox, f.innerHTML = this.textStr = a
				}, e.xSetter = e.ySetter = e.alignSetter = e.rotationSetter = function(a, b) {
					"align" === b && (b = "textAlign"), e[b] = a, e.htmlUpdateTransform()
				}, e.attr({
					text: b,
					x: ka(c),
					y: ka(d)
				}).css({
					position: "absolute",
					whiteSpace: "nowrap",
					fontFamily: this.style.fontFamily,
					fontSize: this.style.fontSize
				}), e.css = e.htmlCss, g.isSVG && (e.add = function(b) {
					var c, d = g.box.parentNode,
						h = [];
					if (this.parentGroup = b) {
						if (c = b.div, !c) {
							for (; b;) h.push(b), b = b.parentGroup;
							Ua(h.reverse(), function(b) {
								var e;
								c = b.div = b.div || p(Ka, {
									className: l(b.element, "class")
								}, {
									position: "absolute",
									left: (b.translateX || 0) + "px",
									top: (b.translateY || 0) + "px"
								}, c || d), e = c.style, a(b, {
									translateXSetter: function(a, c) {
										e.left = a + "px", b[c] = a, b.doTransform = !0
									},
									translateYSetter: function(a, c) {
										e.top = a + "px", b[c] = a, b.doTransform = !0
									},
									visibilitySetter: function(a, b) {
										e[b] = a
									}
								})
							})
						}
					} else c = d;
					return c.appendChild(f), e.added = !0, e.alignOnAdd && e.htmlUpdateTransform(), e
				}), e
			}
		});
		var ib;
		if (!Ca && !Ea) {
			ib = {
				init: function(a, b) {
					var c = ["<", b, ' filled="f" stroked="f"'],
						d = ["position: ", "absolute", ";"],
						e = b === Ka;
					("shape" === b || e) && d.push("left:0;top:0;width:1px;height:1px;"), d.push("visibility: ", e ? "hidden" : "visible"), c.push(' style="', d.join(""), '"/>'), b && (c = e || "span" === b || "img" === b ? c.join("") : a.prepVML(c), this.element = p(c)), this.renderer = a
				},
				add: function(a) {
					var b = this.renderer,
						c = this.element,
						d = b.box,
						d = a ? a.element || a : d;
					return a && a.inverted && b.invertChild(c, d), d.appendChild(c), this.added = !0, this.alignOnAdd && !this.deferUpdateTransform && this.updateTransform(), this.onAdd && this.onAdd(), this
				},
				updateTransform: F.prototype.htmlUpdateTransform,
				setSpanRotation: function() {
					var a = this.rotation,
						b = qa(a * ta),
						c = ra(a * ta);
					o(this.element, {
						filter: a ? ["progid:DXImageTransform.Microsoft.Matrix(M11=", b, ", M12=", -c, ", M21=", c, ", M22=", b, ", sizingMethod='auto expand')"].join("") : La
					})
				},
				getSpanCorrection: function(a, b, c, d, e) {
					var f, g = d ? qa(d * ta) : 1,
						h = d ? ra(d * ta) : 0,
						i = n(this.elemHeight, this.element.offsetHeight);
					this.xCorr = 0 > g && -a, this.yCorr = 0 > h && -i, f = 0 > g * h, this.xCorr += h * b * (f ? 1 - c : c), this.yCorr -= g * b * (d ? f ? c : 1 - c : 1), e && "left" !== e && (this.xCorr -= a * c * (0 > g ? -1 : 1), d && (this.yCorr -= i * c * (0 > h ? -1 : 1)), o(this.element, {
						textAlign: e
					}))
				},
				pathToVML: function(a) {
					for (var b = a.length, c = []; b--;) g(a[b]) ? c[b] = ka(10 * a[b]) - 5 : "Z" === a[b] ? c[b] = "x" : (c[b] = a[b], !a.isArc || "wa" !== a[b] && "at" !== a[b] || (c[b + 5] === c[b + 7] && (c[b + 7] += a[b + 7] > a[b + 5] ? 1 : -1), c[b + 6] === c[b + 8] && (c[b + 8] += a[b + 8] > a[b + 6] ? 1 : -1)));
					return c.join(" ") || "x"
				},
				clip: function(a) {
					var b, c = this;
					return a ? (b = a.members, j(b, c), b.push(c), c.destroyClip = function() {
						j(b, c)
					}, a = a.getCSS(c)) : (c.destroyClip && c.destroyClip(), a = {
						clip: xa ? "inherit" : "rect(auto)"
					}), c.css(a)
				},
				css: F.prototype.htmlCss,
				safeRemoveChild: function(a) {
					a.parentNode && B(a)
				},
				destroy: function() {
					return this.destroyClip && this.destroyClip(), F.prototype.destroy.apply(this)
				},
				on: function(a, b) {
					return this.element["on" + a] = function() {
						var a = ia.event;
						a.target = a.srcElement, b(a)
					}, this
				},
				cutOffPath: function(a, b) {
					var d, a = a.split(/[ ,]/);
					return d = a.length, (9 === d || 11 === d) && (a[d - 4] = a[d - 2] = c(a[d - 2]) - 10 * b), a.join(" ")
				},
				shadow: function(a, b, d) {
					var e, f, g, h, i, j, k, l = [],
						m = this.element,
						o = this.renderer,
						q = m.style,
						r = m.path;
					if (r && "string" != typeof r.value && (r = "x"), i = r, a) {
						for (j = n(a.width, 3), k = (a.opacity || .15) / j, e = 1; 3 >= e; e++) h = 2 * j + 1 - 2 * e, d && (i = this.cutOffPath(r.value, h + .5)), g = ['<shape isShadow="true" strokeweight="', h, '" filled="false" path="', i, '" coordsize="10 10" style="', m.style.cssText, '" />'], f = p(o.prepVML(g), null, {
							left: c(q.left) + n(a.offsetX, 1),
							top: c(q.top) + n(a.offsetY, 1)
						}), d && (f.cutOff = h + 1), g = ['<stroke color="', a.color || "black", '" opacity="', k * e, '"/>'], p(o.prepVML(g), null, null, f), b ? b.element.appendChild(f) : m.parentNode.insertBefore(f, m), l.push(f);
						this.shadows = l
					}
					return this
				},
				updateShadows: Ha,
				setAttr: function(a, b) {
					xa ? this.element[a] = b : this.element.setAttribute(a, b)
				},
				classSetter: function(a) {
					this.element.className = a
				},
				dashstyleSetter: function(a, b, c) {
					(c.getElementsByTagName("stroke")[0] || p(this.renderer.prepVML(["<stroke/>"]), null, null, c))[b] = a || "solid", this[b] = a
				},
				dSetter: function(a, b, c) {
					var d = this.shadows,
						a = a || [];
					if (this.d = a.join && a.join(" "), c.path = a = this.pathToVML(a), d) for (c = d.length; c--;) d[c].path = d[c].cutOff ? this.cutOffPath(a, d[c].cutOff) : a;
					this.setAttr(b, a)
				},
				fillSetter: function(a, b, c) {
					var d = c.nodeName;
					"SPAN" === d ? c.style.color = a : "IMG" !== d && (c.filled = a !== La, this.setAttr("fillcolor", this.renderer.color(a, c, b, this)))
				},
				opacitySetter: Ha,
				rotationSetter: function(a, b, c) {
					c = c.style, this[b] = c[b] = a, c.left = -ka(ra(a * ta) + 1) + "px", c.top = ka(qa(a * ta)) + "px"
				},
				strokeSetter: function(a, b, c) {
					this.setAttr("strokecolor", this.renderer.color(a, c, b))
				},
				"stroke-widthSetter": function(a, b, c) {
					c.stroked = !! a, this[b] = a, g(a) && (a += "px"), this.setAttr("strokeweight", a)
				},
				titleSetter: function(a, b) {
					this.setAttr(b, a)
				},
				visibilitySetter: function(a, b, c) {
					"inherit" === a && (a = "visible"), this.shadows && Ua(this.shadows, function(c) {
						c.style[b] = a
					}), "DIV" === c.nodeName && (a = "hidden" === a ? "-999em" : 0, xa || (c.style[b] = a ? "visible" : "hidden"), b = "top"), c.style[b] = a
				},
				xSetter: function(a, b, c) {
					this[b] = a, "x" === b ? b = "left" : "y" === b && (b = "top"), this.updateClipping ? (this[b] = a, this.updateClipping()) : c.style[b] = a
				},
				zIndexSetter: function(a, b, c) {
					c.style[b] = a
				}
			}, ga.VMLElement = ib = q(F, ib), ib.prototype.ySetter = ib.prototype.widthSetter = ib.prototype.heightSetter = ib.prototype.xSetter;
			var jb = {
				Element: ib,
				isIE8: ua.indexOf("MSIE 8.0") > -1,
				init: function(b, c, d, e) {
					var f;
					if (this.alignedObjects = [], e = this.createElement(Ka).css(a(this.getStyle(e), {
						position: "relative"
					})), f = e.element, b.appendChild(e.element), this.isVML = !0, this.box = f, this.boxWrapper = e, this.cache = {}, this.setSize(c, d, !1), !ha.namespaces.hcv) {
						ha.namespaces.add("hcv", "urn:schemas-microsoft-com:vml");
						try {
							ha.createStyleSheet().cssText = "hcv\\:fill, hcv\\:path, hcv\\:shape, hcv\\:stroke{ behavior:url(#default#VML); display: inline-block; } "
						} catch (g) {
							ha.styleSheets[0].cssText += "hcv\\:fill, hcv\\:path, hcv\\:shape, hcv\\:stroke{ behavior:url(#default#VML); display: inline-block; } "
						}
					}
				},
				isHidden: function() {
					return !this.box.offsetWidth
				},
				clipRect: function(b, c, d, f) {
					var g = this.createElement(),
						h = e(b);
					return a(g, {
						members: [],
						left: (h ? b.x : b) + 1,
						top: (h ? b.y : c) + 1,
						width: (h ? b.width : d) - 1,
						height: (h ? b.height : f) - 1,
						getCSS: function(b) {
							var c = b.element,
								d = c.nodeName,
								b = b.inverted,
								e = this.top - ("shape" === d ? c.offsetTop : 0),
								f = this.left,
								c = f + this.width,
								g = e + this.height,
								e = {
									clip: "rect(" + ka(b ? f : e) + "px," + ka(b ? g : c) + "px," + ka(b ? c : g) + "px," + ka(b ? e : f) + "px)"
								};
							return !b && xa && "DIV" === d && a(e, {
								width: c + "px",
								height: g + "px"
							}), e
						},
						updateClipping: function() {
							Ua(g.members, function(a) {
								a.element && a.css(g.getCSS(a))
							})
						}
					})
				},
				color: function(a, b, c, d) {
					var e, f, g, h = this,
						i = /^rgba/,
						j = La;
					if (a && a.linearGradient ? g = "gradient" : a && a.radialGradient && (g = "pattern"), g) {
						var k, l, m, n, o, q, r, s, t = a.linearGradient || a.radialGradient,
							u = "",
							a = a.stops,
							v = [],
							w = function() {
								f = ['<fill colors="' + v.join(",") + '" opacity="', o, '" o:opacity2="', n, '" type="', g, '" ', u, 'focus="100%" method="any" />'], p(h.prepVML(f), null, null, b)
							};
						if (m = a[0], s = a[a.length - 1], m[0] > 0 && a.unshift([0, m[1]]), s[0] < 1 && a.push([1, s[1]]), Ua(a, function(a, b) {
							i.test(a[1]) ? (e = gb(a[1]), k = e.get("rgb"), l = e.get("a")) : (k = a[1], l = 1), v.push(100 * a[0] + "% " + k), b ? (o = l, q = k) : (n = l, r = k)
						}), "fill" === c) if ("gradient" === g) c = t.x1 || t[0] || 0, a = t.y1 || t[1] || 0, m = t.x2 || t[2] || 0, t = t.y2 || t[3] || 0, u = 'angle="' + (90 - 180 * ja.atan((t - a) / (m - c)) / sa) + '"', w();
						else {
							var x, j = t.r,
								y = 2 * j,
								z = 2 * j,
								A = t.cx,
								B = t.cy,
								C = b.radialReference,
								j = function() {
									C && (x = d.getBBox(), A += (C[0] - x.x) / x.width - .5, B += (C[1] - x.y) / x.height - .5, y *= C[2] / x.width, z *= C[2] / x.height), u = 'src="' + O.global.VMLRadialGradientURL + '" size="' + y + "," + z + '" origin="0.5,0.5" position="' + A + "," + B + '" color2="' + r + '" ', w()
								};
							d.added ? j() : d.onAdd = j, j = q
						} else j = k
					} else i.test(a) && "IMG" !== b.tagName ? (e = gb(a), f = ["<", c, ' opacity="', e.get("a"), '"/>'], p(this.prepVML(f), null, null, b), j = e.get("rgb")) : (j = b.getElementsByTagName(c), j.length && (j[0].opacity = 1, j[0].type = "solid"), j = a);
					return j
				},
				prepVML: function(a) {
					var b = this.isIE8,
						a = a.join("");
					return b ? (a = a.replace("/>", ' xmlns="urn:schemas-microsoft-com:vml" />'), a = -1 === a.indexOf('style="') ? a.replace("/>", ' style="display:inline-block;behavior:url(#default#VML);" />') : a.replace('style="', 'style="display:inline-block;behavior:url(#default#VML);')) : a = a.replace("<", "<hcv:"), a
				},
				text: hb.prototype.html,
				path: function(b) {
					var c = {
						coordsize: "10 10"
					};
					return f(b) ? c.d = b : e(b) && a(c, b), this.createElement("shape").attr(c)
				},
				circle: function(a, b, c) {
					var d = this.symbol("circle");
					return e(a) && (c = a.r, b = a.y, a = a.x), d.isCircle = !0, d.r = c, d.attr({
						x: a,
						y: b
					})
				},
				g: function(a) {
					var b;
					return a && (b = {
						className: "highcharts-" + a,
						"class": "highcharts-" + a
					}), this.createElement(Ka).attr(b)
				},
				image: function(a, b, c, d, e) {
					var f = this.createElement("img").attr({
						src: a
					});
					return arguments.length > 1 && f.attr({
						x: b,
						y: c,
						width: d,
						height: e
					}), f
				},
				createElement: function(a) {
					return "rect" === a ? this.symbol(a) : hb.prototype.createElement.call(this, a)
				},
				invertChild: function(a, b) {
					var d = this,
						e = b.style,
						f = "IMG" === a.tagName && a.style;
					o(a, {
						flip: "x",
						left: c(e.width) - (f ? c(f.top) : 1),
						top: c(e.height) - (f ? c(f.left) : 1),
						rotation: -90
					}), Ua(a.childNodes, function(b) {
						d.invertChild(b, a)
					})
				},
				symbols: {
					arc: function(a, b, c, d, e) {
						var f = e.start,
							g = e.end,
							h = e.r || c || d,
							c = e.innerR,
							d = qa(f),
							i = ra(f),
							j = qa(g),
							k = ra(g);
						return g - f === 0 ? ["x"] : (f = ["wa", a - h, b - h, a + h, b + h, a + h * d, b + h * i, a + h * j, b + h * k], e.open && !c && f.push("e", "M", a, b), f.push("at", a - c, b - c, a + c, b + c, a + c * j, b + c * k, a + c * d, b + c * i, "x", "e"), f.isArc = !0, f)
					},
					circle: function(a, b, c, d, e) {
						return e && (c = d = 2 * e.r), e && e.isCircle && (a -= c / 2, b -= d / 2), ["wa", a, b, a + c, b + d, a + c, b + d / 2, a + c, b + d / 2, "e"]
					},
					rect: function(a, b, c, d, e) {
						return hb.prototype.symbols[k(e) && e.r ? "callout" : "square"].call(0, a, b, c, d, e)
					}
				}
			};
			ga.VMLRenderer = ib = function() {
				this.init.apply(this, arguments)
			}, ib.prototype = b(hb.prototype, jb), L = ib
		}
		hb.prototype.measureSpanWidth = function(a, b) {
			var c, d = ha.createElement("span");
			return c = ha.createTextNode(a), d.appendChild(c), o(d, b), this.box.appendChild(d), c = d.offsetWidth, B(d), c
		};
		var kb;
		Ea && (ga.CanVGRenderer = ib = function() {
			Ba = "http://www.w3.org/1999/xhtml"
		}, ib.prototype.symbols = {}, kb = function() {
			function a() {
				var a, c = b.length;
				for (a = 0; c > a; a++) b[a]();
				b = []
			}
			var b = [];
			return {
				push: function(c, d) {
					0 === b.length && Sa(d, a), b.push(c)
				}
			}
		}(), L = ib), G.prototype = {
			addLabel: function() {
				var b, c = this.axis,
					d = c.options,
					e = c.chart,
					f = c.horiz,
					h = c.categories,
					j = c.names,
					l = this.pos,
					m = d.labels,
					o = m.rotation,
					p = c.tickPositions,
					f = f && h && !m.step && !m.staggerLines && !m.rotation && e.plotWidth / p.length || !f && (e.margin[3] || .33 * e.chartWidth),
					q = l === p[0],
					r = l === p[p.length - 1],
					j = h ? n(h[l], j[l], l) : l,
					h = this.label,
					s = p.info;
				c.isDatetimeAxis && s && (b = d.dateTimeLabelFormats[s.higherRanks[l] || s.unitName]), this.isFirst = q, this.isLast = r, d = c.labelFormatter.call({
					axis: c,
					chart: e,
					isFirst: q,
					isLast: r,
					dateTimeLabelFormat: b,
					value: c.isLog ? C(i(j)) : j
				}), l = f && {
					width: na(1, ka(f - 2 * (m.padding || 10))) + "px"
				}, k(h) ? h && h.attr({
					text: d
				}).css(l) : (b = {
					align: c.labelAlign
				}, g(o) && (b.rotation = o), f && m.ellipsis && (l.HcHeight = c.len / p.length), this.label = h = k(d) && m.enabled ? e.renderer.text(d, 0, 0, m.useHTML).attr(b).css(a(l, m.style)).add(c.labelGroup) : null, c.tickBaseline = e.renderer.fontMetrics(m.style.fontSize, h).b, o && 2 === c.side && (c.tickBaseline *= qa(o * ta))), this.yOffset = h ? n(m.y, c.tickBaseline + (2 === c.side ? 8 : -(h.getBBox().height / 2))) : 0
			},
			getLabelSize: function() {
				var a = this.label,
					b = this.axis;
				return a ? a.getBBox()[b.horiz ? "height" : "width"] : 0
			},
			getLabelSides: function() {
				var a = this.label.getBBox(),
					b = this.axis,
					c = b.horiz,
					d = b.options.labels,
					a = c ? a.width : a.height,
					b = c ? d.x - a * {
						left: 0,
						center: .5,
						right: 1
					}[b.labelAlign] : 0;
				return [b, c ? a + b : a]
			},
			handleOverflow: function(a, b) {
				var c, d, e, f = !0,
					g = this.axis,
					h = this.isFirst,
					i = this.isLast,
					j = g.horiz ? b.x : b.y,
					k = g.reversed,
					l = g.tickPositions,
					m = this.getLabelSides(),
					n = m[0],
					m = m[1],
					o = this.label.line;
				if (c = o || 0, d = g.labelEdge, e = g.justifyLabels && (h || i), d[c] === K || j + n > d[c] ? d[c] = j + m : e || (f = !1), e) {
					c = (d = g.justifyToPlot) ? g.pos : 0, d = d ? c + g.len : g.chart.chartWidth;
					do a += h ? 1 : -1, e = g.ticks[l[a]];
					while (l[a] && (!e || !e.label || e.label.line !== o));
					g = e && e.label.xy && e.label.xy.x + e.getLabelSides()[h ? 0 : 1], h && !k || i && k ? c > j + n && (j = c - n, e && j + m > g && (f = !1)) : j + m > d && (j = d - m, e && g > j + n && (f = !1)), b.x = j
				}
				return f
			},
			getPosition: function(a, b, c, d) {
				var e = this.axis,
					f = e.chart,
					g = d && f.oldChartHeight || f.chartHeight;
				return {
					x: a ? e.translate(b + c, null, null, d) + e.transB : e.left + e.offset + (e.opposite ? (d && f.oldChartWidth || f.chartWidth) - e.right - e.left : 0),
					y: a ? g - e.bottom + e.offset - (e.opposite ? e.height : 0) : g - e.translate(b + c, null, null, d) - e.transB
				}
			},
			getLabelPosition: function(a, b, c, d, e, f, g, h) {
				var i = this.axis,
					j = i.transA,
					k = i.reversed,
					l = i.staggerLines,
					a = a + e.x - (f && d ? f * j * (k ? -1 : 1) : 0),
					b = b + this.yOffset - (f && !d ? f * j * (k ? 1 : -1) : 0);
				return l && (c.line = g / (h || 1) % l, b += c.line * (i.labelOffset / l)), {
					x: a,
					y: b
				}
			},
			getMarkPath: function(a, b, c, d, e, f) {
				return f.crispLine(["M", a, b, "L", a + (e ? 0 : -c), b + (e ? c : 0)], d)
			},
			render: function(a, b, c) {
				var d = this.axis,
					e = d.options,
					f = d.chart.renderer,
					g = d.horiz,
					h = this.type,
					i = this.label,
					j = this.pos,
					k = e.labels,
					l = this.gridLine,
					m = h ? h + "Grid" : "grid",
					o = h ? h + "Tick" : "tick",
					p = e[m + "LineWidth"],
					q = e[m + "LineColor"],
					r = e[m + "LineDashStyle"],
					s = e[o + "Length"],
					m = e[o + "Width"] || 0,
					t = e[o + "Color"],
					u = e[o + "Position"],
					o = this.mark,
					v = k.step,
					w = !0,
					x = d.tickmarkOffset,
					y = this.getPosition(g, j, x, b),
					z = y.x,
					y = y.y,
					A = g && z === d.pos + d.len || !g && y === d.pos ? -1 : 1,
					c = n(c, 1);
				this.isActive = !0, p && (j = d.getPlotLinePath(j + x, p * A, b, !0), l === K && (l = {
					stroke: q,
					"stroke-width": p
				}, r && (l.dashstyle = r), h || (l.zIndex = 1), b && (l.opacity = 0), this.gridLine = l = p ? f.path(j).attr(l).add(d.gridGroup) : null), !b && l && j && l[this.isNew ? "attr" : "animate"]({
					d: j,
					opacity: c
				})), m && s && ("inside" === u && (s = -s), d.opposite && (s = -s), h = this.getMarkPath(z, y, s, m * A, g, f), o ? o.animate({
					d: h,
					opacity: c
				}) : this.mark = f.path(h).attr({
					stroke: t,
					"stroke-width": m,
					opacity: c
				}).add(d.axisGroup)), i && !isNaN(z) && (i.xy = y = this.getLabelPosition(z, y, i, g, k, x, a, v), this.isFirst && !this.isLast && !n(e.showFirstLabel, 1) || this.isLast && !this.isFirst && !n(e.showLastLabel, 1) ? w = !1 : !d.isRadial && !k.step && !k.rotation && !b && 0 !== c && (w = this.handleOverflow(a, y)), v && a % v && (w = !1), w && !isNaN(y.y) ? (y.opacity = c, i[this.isNew ? "attr" : "animate"](y), this.isNew = !1) : i.attr("y", -9999))
			},
			destroy: function() {
				A(this, this.axis)
			}
		}, ga.PlotLineOrBand = function(a, b) {
			this.axis = a, b && (this.options = b, this.id = b.id)
		}, ga.PlotLineOrBand.prototype = {
			render: function() {
				var a, c = this,
					d = c.axis,
					e = d.horiz,
					f = (d.pointRange || 0) / 2,
					g = c.options,
					i = g.label,
					j = c.label,
					l = g.width,
					m = g.to,
					n = g.from,
					o = k(n) && k(m),
					p = g.value,
					q = g.dashStyle,
					r = c.svgElem,
					s = [],
					t = g.color,
					u = g.zIndex,
					v = g.events,
					w = {},
					x = d.chart.renderer;
				if (d.isLog && (n = h(n), m = h(m), p = h(p)), l) s = d.getPlotLinePath(p, l), w = {
					stroke: t,
					"stroke-width": l
				}, q && (w.dashstyle = q);
				else {
					if (!o) return;
					n = na(n, d.min - f), m = oa(m, d.max + f), s = d.getPlotBandPath(n, m, g), t && (w.fill = t), g.borderWidth && (w.stroke = g.borderColor, w["stroke-width"] = g.borderWidth)
				}
				if (k(u) && (w.zIndex = u), r) s ? r.animate({
					d: s
				}, null, r.onGetPath) : (r.hide(), r.onGetPath = function() {
					r.show()
				}, j && (c.label = j = j.destroy()));
				else if (s && s.length && (c.svgElem = r = x.path(s).attr(w).add(), v)) for (a in f = function(a) {
					r.on(a, function(b) {
						v[a].apply(c, [b])
					})
				}, v) f(a);
				return i && k(i.text) && s && s.length && d.width > 0 && d.height > 0 ? (i = b({
					align: e && o && "center",
					x: e ? !o && 4 : 10,
					verticalAlign: !e && o && "middle",
					y: e ? o ? 16 : 10 : o ? 6 : -4,
					rotation: e && !o && 90
				}, i), j || (w = {
					align: i.textAlign || i.align,
					rotation: i.rotation
				}, k(u) && (w.zIndex = u), c.label = j = x.text(i.text, 0, 0, i.useHTML).attr(w).css(i.style).add()), d = [s[1], s[4], o ? s[6] : s[1]], o = [s[2], s[5], o ? s[7] : s[2]], s = y(d), e = y(o), j.align(i, !1, {
					x: s,
					y: e,
					width: z(d) - s,
					height: z(o) - e
				}), j.show()) : j && j.hide(), c
			},
			destroy: function() {
				j(this.axis.plotLinesAndBands, this), delete this.axis, A(this)
			}
		}, H.prototype = {
			defaultOptions: {
				dateTimeLabelFormats: {
					millisecond: "%H:%M:%S.%L",
					second: "%H:%M:%S",
					minute: "%H:%M",
					hour: "%H:%M",
					day: "%e. %b",
					week: "%e. %b",
					month: "%b '%y",
					year: "%Y"
				},
				endOnTick: !1,
				gridLineColor: "#C0C0C0",
				labels: Qa,
				lineColor: "#C0D0E0",
				lineWidth: 1,
				minPadding: .01,
				maxPadding: .01,
				minorGridLineColor: "#E0E0E0",
				minorGridLineWidth: 1,
				minorTickColor: "#A0A0A0",
				minorTickLength: 2,
				minorTickPosition: "outside",
				startOfWeek: 1,
				startOnTick: !1,
				tickColor: "#C0D0E0",
				tickLength: 10,
				tickmarkPlacement: "between",
				tickPixelInterval: 100,
				tickPosition: "outside",
				tickWidth: 1,
				title: {
					align: "middle",
					style: {
						color: "#707070"
					}
				},
				type: "linear"
			},
			defaultYAxisOptions: {
				endOnTick: !0,
				gridLineWidth: 1,
				tickPixelInterval: 72,
				showLastLabel: !0,
				labels: {
					x: -8,
					y: 3
				},
				lineWidth: 0,
				maxPadding: .05,
				minPadding: .05,
				startOnTick: !0,
				tickWidth: 0,
				title: {
					rotation: 270,
					text: "Values"
				},
				stackLabels: {
					enabled: !1,
					formatter: function() {
						return r(this.total, -1)
					},
					style: Qa.style
				}
			},
			defaultLeftAxisOptions: {
				labels: {
					x: -15,
					y: null
				},
				title: {
					rotation: 270
				}
			},
			defaultRightAxisOptions: {
				labels: {
					x: 15,
					y: null
				},
				title: {
					rotation: 90
				}
			},
			defaultBottomAxisOptions: {
				labels: {
					x: 0,
					y: null
				},
				title: {
					rotation: 0
				}
			},
			defaultTopAxisOptions: {
				labels: {
					x: 0,
					y: -15
				},
				title: {
					rotation: 0
				}
			},
			init: function(a, b) {
				var c = b.isX;
				this.horiz = a.inverted ? !c : c, this.coll = (this.isXAxis = c) ? "xAxis" : "yAxis", this.opposite = b.opposite, this.side = b.side || (this.horiz ? this.opposite ? 0 : 2 : this.opposite ? 1 : 3), this.setOptions(b);
				var d = this.options,
					e = d.type;
				this.labelFormatter = d.labels.formatter || this.defaultLabelFormatter, this.userOptions = b, this.minPixelPadding = 0, this.chart = a, this.reversed = d.reversed, this.zoomEnabled = d.zoomEnabled !== !1, this.categories = d.categories || "category" === e, this.names = [], this.isLog = "logarithmic" === e, this.isDatetimeAxis = "datetime" === e, this.isLinked = k(d.linkedTo), this.tickmarkOffset = this.categories && "between" === d.tickmarkPlacement && 1 === n(d.tickInterval, 1) ? .5 : 0, this.ticks = {}, this.labelEdge = [], this.minorTicks = {}, this.plotLinesAndBands = [], this.alternateBands = {}, this.len = 0, this.minRange = this.userMinRange = d.minRange || d.maxZoom, this.range = d.range, this.offset = d.offset || 0, this.stacks = {}, this.oldStacks = {}, this.min = this.max = null, this.crosshair = n(d.crosshair, m(a.options.tooltip.crosshairs)[c ? 0 : 1], !1);
				var f, d = this.options.events; - 1 === Ta(this, a.axes) && (c && !this.isColorAxis ? a.axes.splice(a.xAxis.length, 0, this) : a.axes.push(this), a[this.coll].push(this)), this.series = this.series || [], a.inverted && c && this.reversed === K && (this.reversed = !0), this.removePlotLine = this.removePlotBand = this.removePlotBandOrLine;
				for (f in d) Ya(this, f, d[f]);
				this.isLog && (this.val2lin = h, this.lin2val = i)
			},
			setOptions: function(a) {
				this.options = b(this.defaultOptions, this.isXAxis ? {} : this.defaultYAxisOptions, [this.defaultTopAxisOptions, this.defaultRightAxisOptions, this.defaultBottomAxisOptions, this.defaultLeftAxisOptions][this.side], b(O[this.coll], a))
			},
			defaultLabelFormatter: function() {
				var a, b = this.axis,
					c = this.value,
					d = b.categories,
					e = this.dateTimeLabelFormat,
					f = O.lang.numericSymbols,
					g = f && f.length,
					h = b.options.labels.format,
					b = b.isLog ? c : b.tickInterval;
				if (h) a = u(h, this);
				else if (d) a = c;
				else if (e) a = P(e, c);
				else if (g && b >= 1e3) for (; g-- && a === K;) d = Math.pow(1e3, g + 1), b >= d && null !== f[g] && (a = r(c / d, -1) + f[g]);
				return a === K && (a = pa(c) >= 1e4 ? r(c, 0) : r(c, -1, K, "")), a
			},
			getSeriesExtremes: function() {
				var a = this,
					b = a.chart;
				a.hasVisibleSeries = !1, a.dataMin = a.dataMax = a.ignoreMinPadding = a.ignoreMaxPadding = null, a.buildStacks && a.buildStacks(), Ua(a.series, function(c) {
					if (c.visible || !b.options.chart.ignoreHiddenSeries) {
						var d;
						d = c.options.threshold;
						var e;
						a.hasVisibleSeries = !0, a.isLog && 0 >= d && (d = null), a.isXAxis ? (d = c.xData, d.length && (a.dataMin = oa(n(a.dataMin, d[0]), y(d)), a.dataMax = na(n(a.dataMax, d[0]), z(d)))) : (c.getExtremes(), e = c.dataMax, c = c.dataMin, k(c) && k(e) && (a.dataMin = oa(n(a.dataMin, c), c), a.dataMax = na(n(a.dataMax, e), e)), k(d) && (a.dataMin >= d ? (a.dataMin = d, a.ignoreMinPadding = !0) : a.dataMax < d && (a.dataMax = d, a.ignoreMaxPadding = !0)))
					}
				})
			},
			translate: function(a, b, c, d, e, f) {
				var h = 1,
					i = 0,
					j = d ? this.oldTransA : this.transA,
					d = d ? this.oldMin : this.min,
					k = this.minPixelPadding,
					e = (this.options.ordinal || this.isLog && e) && this.lin2val;
				return j || (j = this.transA), c && (h *= -1, i = this.len), this.reversed && (h *= -1, i -= h * (this.sector || this.len)), b ? (a = a * h + i, a -= k, a = a / j + d, e && (a = this.lin2val(a))) : (e && (a = this.val2lin(a)), "between" === f && (f = .5), a = h * (a - d) * j + i + h * k + (g(f) ? j * f * this.pointRange : 0)), a
			},
			toPixels: function(a, b) {
				return this.translate(a, !1, !this.horiz, null, !0) + (b ? 0 : this.pos)
			},
			toValue: function(a, b) {
				return this.translate(a - (b ? 0 : this.pos), !0, !this.horiz, null, !0)
			},
			getPlotLinePath: function(a, b, c, d, e) {
				var f, g, h, i = this.chart,
					j = this.left,
					k = this.top,
					l = c && i.oldChartHeight || i.chartHeight,
					m = c && i.oldChartWidth || i.chartWidth;
				return f = this.transB, e = n(e, this.translate(a, null, null, c)), a = c = ka(e + f), f = g = ka(l - e - f), isNaN(e) ? h = !0 : this.horiz ? (f = k, g = l - this.bottom, (j > a || a > j + this.width) && (h = !0)) : (a = j, c = m - this.right, (k > f || f > k + this.height) && (h = !0)), h && !d ? null : i.renderer.crispLine(["M", a, f, "L", c, g], b || 1)
			},
			getLinearTickPositions: function(a, b, c) {
				var d, e = C(la(b / a) * a),
					f = C(ma(c / a) * a),
					h = [];
				if (b === c && g(b)) return [b];
				for (b = e; f >= b && (h.push(b), b = C(b + a), b !== d);) d = b;
				return h
			},
			getMinorTickPositions: function() {
				var a, b = this.options,
					c = this.tickPositions,
					d = this.minorTickInterval,
					e = [];
				if (this.isLog) for (a = c.length, b = 1; a > b; b++) e = e.concat(this.getLogTickPositions(d, c[b - 1], c[b], !0));
				else if (this.isDatetimeAxis && "auto" === b.minorTickInterval) e = e.concat(this.getTimeTicks(this.normalizeTimeTickInterval(d), this.min, this.max, b.startOfWeek)), e[0] < this.min && e.shift();
				else for (c = this.min + (c[0] - this.min) % d; c <= this.max; c += d) e.push(c);
				return e
			},
			adjustForMinRange: function() {
				var a, b, c, d, e, f, g = this.options,
					h = this.min,
					i = this.max,
					j = this.dataMax - this.dataMin >= this.minRange;
				if (this.isXAxis && this.minRange === K && !this.isLog && (k(g.min) || k(g.max) ? this.minRange = null : (Ua(this.series, function(a) {
					for (e = a.xData, c = f = a.xIncrement ? 1 : e.length - 1; c > 0; c--) d = e[c] - e[c - 1], (b === K || b > d) && (b = d)
				}), this.minRange = oa(5 * b, this.dataMax - this.dataMin))), i - h < this.minRange) {
					var l = this.minRange;
					a = (l - i + h) / 2, a = [h - a, n(g.min, h - a)], j && (a[2] = this.dataMin), h = z(a), i = [h + l, n(g.max, h + l)], j && (i[2] = this.dataMax), i = y(i), l > i - h && (a[0] = i - l, a[1] = n(g.min, i - l), h = z(a))
				}
				this.min = h, this.max = i
			},
			setAxisTranslation: function(a) {
				var b, c = this,
					e = c.max - c.min,
					f = c.axisPointRange || 0,
					g = 0,
					h = 0,
					i = c.linkedParent,
					j = !! c.categories,
					l = c.transA;
				(c.isXAxis || j || f) && (i ? (g = i.minPointOffset, h = i.pointRangePadding) : Ua(c.series, function(a) {
					var i = j ? 1 : c.isXAxis ? a.pointRange : c.axisPointRange || 0,
						l = a.options.pointPlacement,
						m = a.closestPointRange;
					i > e && (i = 0), f = na(f, i), g = na(g, d(l) ? 0 : i / 2), h = na(h, "on" === l ? 0 : i), !a.noSharedTooltip && k(m) && (b = k(b) ? oa(b, m) : m)
				}), i = c.ordinalSlope && b ? c.ordinalSlope / b : 1, c.minPointOffset = g *= i, c.pointRangePadding = h *= i, c.pointRange = oa(f, e), c.closestPointRange = b), a && (c.oldTransA = l), c.translationSlope = c.transA = l = c.len / (e + h || 1), c.transB = c.horiz ? c.left : c.bottom, c.minPixelPadding = l * g
			},
			setTickPositions: function(a) {
				var b, c = this,
					d = c.chart,
					e = c.options,
					f = e.startOnTick,
					i = e.endOnTick,
					j = c.isLog,
					l = c.isDatetimeAxis,
					m = c.isXAxis,
					o = c.isLinked,
					p = c.options.tickPositioner,
					q = e.maxPadding,
					r = e.minPadding,
					s = e.tickInterval,
					t = e.minTickInterval,
					u = e.tickPixelInterval,
					x = c.categories;
				o ? (c.linkedParent = d[c.coll][e.linkedTo], d = c.linkedParent.getExtremes(), c.min = n(d.min, d.dataMin), c.max = n(d.max, d.dataMax), e.type !== c.linkedParent.options.type && T(11, 1)) : (c.min = n(c.userMin, e.min, c.dataMin), c.max = n(c.userMax, e.max, c.dataMax)), j && (!a && oa(c.min, n(c.dataMin, c.min)) <= 0 && T(10, 1), c.min = C(h(c.min)), c.max = C(h(c.max))), c.range && k(c.max) && (c.userMin = c.min = na(c.min, c.max - c.range), c.userMax = c.max, c.range = null), c.beforePadding && c.beforePadding(), c.adjustForMinRange(), x || c.axisPointRange || c.usePercentage || o || !k(c.min) || !k(c.max) || !(d = c.max - c.min) || (k(e.min) || k(c.userMin) || !r || !(c.dataMin < 0) && c.ignoreMinPadding || (c.min -= d * r), k(e.max) || k(c.userMax) || !q || !(c.dataMax > 0) && c.ignoreMaxPadding || (c.max += d * q)), g(e.floor) && (c.min = na(c.min, e.floor)), g(e.ceiling) && (c.max = oa(c.max, e.ceiling)), c.min === c.max || void 0 === c.min || void 0 === c.max ? c.tickInterval = 1 : o && !s && u === c.linkedParent.options.tickPixelInterval ? c.tickInterval = c.linkedParent.tickInterval : (c.tickInterval = n(s, x ? 1 : (c.max - c.min) * u / na(c.len, u)), !k(s) && c.len < u && !this.isRadial && !this.isLog && !x && f && i && (b = !0, c.tickInterval /= 4)), m && !a && Ua(c.series, function(a) {
					a.processData(c.min !== c.oldMin || c.max !== c.oldMax)
				}), c.setAxisTranslation(!0), c.beforeSetTickPositions && c.beforeSetTickPositions(), c.postProcessTickInterval && (c.tickInterval = c.postProcessTickInterval(c.tickInterval)), c.pointRange && (c.tickInterval = na(c.pointRange, c.tickInterval)), !s && c.tickInterval < t && (c.tickInterval = t), l || j || s || (c.tickInterval = w(c.tickInterval, null, v(c.tickInterval), n(e.allowDecimals, !(c.tickInterval > 1 && c.tickInterval < 5 && c.max > 1e3 && c.max < 9999)))), c.minorTickInterval = "auto" === e.minorTickInterval && c.tickInterval ? c.tickInterval / 5 : e.minorTickInterval, c.tickPositions = a = e.tickPositions ? [].concat(e.tickPositions) : p && p.apply(c, [c.min, c.max]), a || (!c.ordinalPositions && (c.max - c.min) / c.tickInterval > na(2 * c.len, 200) && T(19, !0), a = l ? c.getTimeTicks(c.normalizeTimeTickInterval(c.tickInterval, e.units), c.min, c.max, e.startOfWeek, c.ordinalPositions, c.closestPointRange, !0) : j ? c.getLogTickPositions(c.tickInterval, c.min, c.max) : c.getLinearTickPositions(c.tickInterval, c.min, c.max), b && a.splice(1, a.length - 2), c.tickPositions = a), o || (e = a[0], j = a[a.length - 1], l = c.minPointOffset || 0, f ? c.min = e : c.min - l > e && a.shift(), i ? c.max = j : c.max + l < j && a.pop(), 0 === a.length && k(e) && a.push((j + e) / 2), 1 === a.length && (f = pa(c.max) > 1e13 ? 1 : .001, c.min -= f, c.max += f))
			},
			setMaxTicks: function() {
				var a = this.chart,
					b = a.maxTicks || {},
					c = this.tickPositions,
					d = this._maxTicksKey = [this.coll, this.pos, this.len].join("-");
				!this.isLinked && !this.isDatetimeAxis && c && c.length > (b[d] || 0) && this.options.alignTicks !== !1 && (b[d] = c.length), a.maxTicks = b
			},
			adjustTickAmount: function() {
				var a = this._maxTicksKey,
					b = this.tickPositions,
					c = this.chart.maxTicks;
				if (c && c[a] && !this.isDatetimeAxis && !this.categories && !this.isLinked && this.options.alignTicks !== !1 && this.min !== K) {
					var d = this.tickAmount,
						e = b.length;
					if (this.tickAmount = a = c[a], a > e) {
						for (; b.length < a;) b.push(C(b[b.length - 1] + this.tickInterval));
						this.transA *= (e - 1) / (a - 1), this.max = b[b.length - 1]
					}
					k(d) && a !== d && (this.isDirty = !0)
				}
			},
			setScale: function() {
				var a, b, c, d, e = this.stacks;
				if (this.oldMin = this.min, this.oldMax = this.max, this.oldAxisLength = this.len, this.setAxisSize(), d = this.len !== this.oldAxisLength, Ua(this.series, function(a) {
					(a.isDirtyData || a.isDirty || a.xAxis.isDirty) && (c = !0)
				}), d || c || this.isLinked || this.forceRedraw || this.userMin !== this.oldUserMin || this.userMax !== this.oldUserMax) {
					if (!this.isXAxis) for (a in e) for (b in e[a]) e[a][b].total = null, e[a][b].cum = 0;
					this.forceRedraw = !1, this.getSeriesExtremes(), this.setTickPositions(), this.oldUserMin = this.userMin, this.oldUserMax = this.userMax, this.isDirty || (this.isDirty = d || this.min !== this.oldMin || this.max !== this.oldMax)
				} else if (!this.isXAxis) {
					this.oldStacks && (e = this.stacks = this.oldStacks);
					for (a in e) for (b in e[a]) e[a][b].cum = e[a][b].total
				}
				this.setMaxTicks()
			},
			setExtremes: function(b, c, d, e, f) {
				var g = this,
					h = g.chart,
					d = n(d, !0),
					f = a(f, {
						min: b,
						max: c
					});
				$a(g, "setExtremes", f, function() {
					g.userMin = b, g.userMax = c, g.eventArgs = f, g.isDirtyExtremes = !0, d && h.redraw(e)
				})
			},
			zoom: function(a, b) {
				var c = this.dataMin,
					d = this.dataMax,
					e = this.options;
				return this.allowZoomOutside || (k(c) && a <= oa(c, n(e.min, c)) && (a = K), k(d) && b >= na(d, n(e.max, d)) && (b = K)), this.displayBtn = a !== K || b !== K, this.setExtremes(a, b, !1, K, {
					trigger: "zoom"
				}), !0
			},
			setAxisSize: function() {
				var a = this.chart,
					b = this.options,
					c = b.offsetLeft || 0,
					d = this.horiz,
					e = n(b.width, a.plotWidth - c + (b.offsetRight || 0)),
					f = n(b.height, a.plotHeight),
					g = n(b.top, a.plotTop),
					b = n(b.left, a.plotLeft + c),
					c = /%$/;
				c.test(f) && (f = parseInt(f, 10) / 100 * a.plotHeight), c.test(g) && (g = parseInt(g, 10) / 100 * a.plotHeight + a.plotTop), this.left = b, this.top = g, this.width = e, this.height = f, this.bottom = a.chartHeight - f - g, this.right = a.chartWidth - e - b, this.len = na(d ? e : f, 0), this.pos = d ? b : g
			},
			getExtremes: function() {
				var a = this.isLog;
				return {
					min: a ? C(i(this.min)) : this.min,
					max: a ? C(i(this.max)) : this.max,
					dataMin: this.dataMin,
					dataMax: this.dataMax,
					userMin: this.userMin,
					userMax: this.userMax
				}
			},
			getThreshold: function(a) {
				var b = this.isLog,
					c = b ? i(this.min) : this.min,
					b = b ? i(this.max) : this.max;
				return c > a || null === a ? a = c : a > b && (a = b), this.translate(a, 0, 1, 0, 1)
			},
			autoLabelAlign: function(a) {
				return a = (n(a, 0) - 90 * this.side + 720) % 360, a > 15 && 165 > a ? "right" : a > 195 && 345 > a ? "left" : "center"
			},
			getOffset: function() {
				var a, b, c, d, e, f, g, h, i, j = this,
					l = j.chart,
					m = l.renderer,
					o = j.options,
					p = j.tickPositions,
					q = j.ticks,
					r = j.horiz,
					s = j.side,
					t = l.inverted ? [1, 0, 3, 2][s] : s,
					u = 0,
					v = 0,
					w = o.title,
					x = o.labels,
					y = 0,
					z = l.axisOffset,
					l = l.clipOffset,
					A = [-1, 1, 1, -1][s],
					B = 1,
					C = n(x.maxStaggerLines, 5);
				if (j.hasData = a = j.hasVisibleSeries || k(j.min) && k(j.max) && !! p, j.showAxis = b = a || n(o.showEmpty, !0), j.staggerLines = j.horiz && x.staggerLines, j.axisGroup || (j.gridGroup = m.g("grid").attr({
					zIndex: o.gridZIndex || 1
				}).add(), j.axisGroup = m.g("axis").attr({
					zIndex: o.zIndex || 2
				}).add(), j.labelGroup = m.g("axis-labels").attr({
					zIndex: x.zIndex || 7
				}).addClass("highcharts-" + j.coll.toLowerCase() + "-labels").add()), a || j.isLinked) {
					if (j.labelAlign = n(x.align || j.autoLabelAlign(x.rotation)), Ua(p, function(a) {
						q[a] ? q[a].addLabel() : q[a] = new G(j, a)
					}), j.horiz && !j.staggerLines && C && !x.rotation) {
						for (a = j.reversed ? [].concat(p).reverse() : p; C > B;) {
							for (e = [], f = !1, d = 0; d < a.length; d++) g = a[d], h = (h = q[g].label && q[g].label.getBBox()) ? h.width : 0, i = d % B, h && (g = j.translate(g), e[i] !== K && g < e[i] && (f = !0), e[i] = g + h);
							if (!f) break;
							B++
						}
						B > 1 && (j.staggerLines = B)
					}
					Ua(p, function(a) {
						(0 === s || 2 === s || {
							1: "left",
							3: "right"
						}[s] === j.labelAlign) && (y = na(q[a].getLabelSize(), y))
					}), j.staggerLines && (y *= j.staggerLines, j.labelOffset = y)
				} else for (d in q) q[d].destroy(), delete q[d];
				w && w.text && w.enabled !== !1 && (j.axisTitle || (j.axisTitle = m.text(w.text, 0, 0, w.useHTML).attr({
					zIndex: 7,
					rotation: w.rotation || 0,
					align: w.textAlign || {
						low: "left",
						middle: "center",
						high: "right"
					}[w.align]
				}).addClass("highcharts-" + this.coll.toLowerCase() + "-title").css(w.style).add(j.axisGroup), j.axisTitle.isNew = !0), b && (u = j.axisTitle.getBBox()[r ? "height" : "width"], c = w.offset, v = k(c) ? 0 : n(w.margin, r ? 5 : 10)), j.axisTitle[b ? "show" : "hide"]()), j.offset = A * n(o.offset, z[s]), m = 2 === s ? j.tickBaseline : 0, r = y + v + (y && A * (r ? n(x.y, j.tickBaseline + 8) : x.x) - m), j.axisTitleMargin = n(c, r), z[s] = na(z[s], j.axisTitleMargin + u + A * j.offset, r), l[t] = na(l[t], 2 * la(o.lineWidth / 2))
			},
			getLinePath: function(a) {
				var b = this.chart,
					c = this.opposite,
					d = this.offset,
					e = this.horiz,
					f = this.left + (c ? this.width : 0) + d,
					d = b.chartHeight - this.bottom - (c ? this.height : 0) + d;
				return c && (a *= -1), b.renderer.crispLine(["M", e ? this.left : f, e ? d : this.top, "L", e ? b.chartWidth - this.right : f, e ? d : b.chartHeight - this.bottom], a)
			},
			getTitlePosition: function() {
				var a = this.horiz,
					b = this.left,
					d = this.top,
					e = this.len,
					f = this.options.title,
					g = a ? b : d,
					h = this.opposite,
					i = this.offset,
					j = c(f.style.fontSize || 12),
					e = {
						low: g + (a ? 0 : e),
						middle: g + e / 2,
						high: g + (a ? e : 0)
					}[f.align],
					b = (a ? d + this.height : b) + (a ? 1 : -1) * (h ? -1 : 1) * this.axisTitleMargin + (2 === this.side ? j : 0);
				return {
					x: a ? e : b + (h ? this.width : 0) + i + (f.x || 0),
					y: a ? b - (h ? this.height : 0) + i : e + (f.y || 0)
				}
			},
			render: function() {
				var a, b, c, d = this,
					e = d.horiz,
					f = d.reversed,
					g = d.chart,
					h = g.renderer,
					j = d.options,
					l = d.isLog,
					m = d.isLinked,
					n = d.tickPositions,
					o = d.axisTitle,
					p = d.ticks,
					q = d.minorTicks,
					r = d.alternateBands,
					s = j.stackLabels,
					t = j.alternateGridColor,
					u = d.tickmarkOffset,
					v = j.lineWidth,
					w = g.hasRendered && k(d.oldMin) && !isNaN(d.oldMin),
					x = d.hasData,
					y = d.showAxis,
					z = j.labels.overflow,
					A = d.justifyLabels = e && z !== !1;
				d.labelEdge.length = 0, d.justifyToPlot = "justify" === z, Ua([p, q, r], function(a) {
					for (var b in a) a[b].isActive = !1
				}), (x || m) && (d.minorTickInterval && !d.categories && Ua(d.getMinorTickPositions(), function(a) {
					q[a] || (q[a] = new G(d, a, "minor")), w && q[a].isNew && q[a].render(null, !0), q[a].render(null, !1, 1)
				}), n.length && (a = n.slice(), (e && f || !e && !f) && a.reverse(), A && (a = a.slice(1).concat([a[0]])), Ua(a, function(b, c) {
					A && (c = c === a.length - 1 ? 0 : c + 1), (!m || b >= d.min && b <= d.max) && (p[b] || (p[b] = new G(d, b)), w && p[b].isNew && p[b].render(c, !0, .1), p[b].render(c))
				}), u && 0 === d.min && (p[-1] || (p[-1] = new G(d, -1, null, !0)), p[-1].render(-1))), t && Ua(n, function(a, e) {
					e % 2 === 0 && a < d.max && (r[a] || (r[a] = new ga.PlotLineOrBand(d)), b = a + u, c = n[e + 1] !== K ? n[e + 1] + u : d.max, r[a].options = {
						from: l ? i(b) : b,
						to: l ? i(c) : c,
						color: t
					}, r[a].render(), r[a].isActive = !0)
				}), d._addedPlotLB || (Ua((j.plotLines || []).concat(j.plotBands || []), function(a) {
					d.addPlotBandOrLine(a)
				}), d._addedPlotLB = !0)), Ua([p, q, r], function(a) {
					var b, c, d = [],
						e = Q ? Q.duration || 500 : 0,
						f = function() {
							for (c = d.length; c--;) a[d[c]] && !a[d[c]].isActive && (a[d[c]].destroy(), delete a[d[c]])
						};
					for (b in a) a[b].isActive || (a[b].render(b, !1, 0), a[b].isActive = !1, d.push(b));
					a !== r && g.hasRendered && e ? e && setTimeout(f, e) : f()
				}), v && (e = d.getLinePath(v), d.axisLine ? d.axisLine.animate({
					d: e
				}) : d.axisLine = h.path(e).attr({
					stroke: j.lineColor,
					"stroke-width": v,
					zIndex: 7
				}).add(d.axisGroup), d.axisLine[y ? "show" : "hide"]()), o && y && (o[o.isNew ? "attr" : "animate"](d.getTitlePosition()), o.isNew = !1), s && s.enabled && d.renderStackTotals(), d.isDirty = !1
			},
			redraw: function() {
				this.render(), Ua(this.plotLinesAndBands, function(a) {
					a.render()
				}), Ua(this.series, function(a) {
					a.isDirty = !0
				})
			},
			destroy: function(a) {
				var b, c = this,
					d = c.stacks,
					e = c.plotLinesAndBands;
				a || Za(c);
				for (b in d) A(d[b]), d[b] = null;
				for (Ua([c.ticks, c.minorTicks, c.alternateBands], function(a) {
					A(a)
				}), a = e.length; a--;) e[a].destroy();
				Ua("stackTotalGroup,axisLine,axisTitle,axisGroup,cross,gridGroup,labelGroup".split(","), function(a) {
					c[a] && (c[a] = c[a].destroy())
				}), this.cross && this.cross.destroy()
			},
			drawCrosshair: function(a, b) {
				if (this.crosshair) if ((k(b) || !n(this.crosshair.snap, !0)) === !1) this.hideCrosshair();
				else {
					var c, d = this.crosshair,
						e = d.animation;
					n(d.snap, !0) ? k(b) && (c = this.chart.inverted != this.horiz ? b.plotX : this.len - b.plotY) : c = this.horiz ? a.chartX - this.pos : this.len - a.chartY + this.pos, c = this.isRadial ? this.getPlotLinePath(this.isXAxis ? b.x : n(b.stackY, b.y)) : this.getPlotLinePath(null, null, null, null, c), null === c ? this.hideCrosshair() : this.cross ? this.cross.attr({
						visibility: "visible"
					})[e ? "animate" : "attr"]({
						d: c
					}, e) : (e = {
						"stroke-width": d.width || 1,
						stroke: d.color || "#C0C0C0",
						zIndex: d.zIndex || 2
					}, d.dashStyle && (e.dashstyle = d.dashStyle), this.cross = this.chart.renderer.path(c).attr(e).add())
				}
			},
			hideCrosshair: function() {
				this.cross && this.cross.hide()
			}
		}, a(H.prototype, {
			getPlotBandPath: function(a, b) {
				var c = this.getPlotLinePath(b),
					d = this.getPlotLinePath(a);
				return d && c ? d.push(c[4], c[5], c[1], c[2]) : d = null, d
			},
			addPlotBand: function(a) {
				return this.addPlotBandOrLine(a, "plotBands")
			},
			addPlotLine: function(a) {
				return this.addPlotBandOrLine(a, "plotLines")
			},
			addPlotBandOrLine: function(a, b) {
				var c = new ga.PlotLineOrBand(this, a).render(),
					d = this.userOptions;
				return c && (b && (d[b] = d[b] || [], d[b].push(a)), this.plotLinesAndBands.push(c)), c
			},
			removePlotBandOrLine: function(a) {
				for (var b = this.plotLinesAndBands, c = this.options, d = this.userOptions, e = b.length; e--;) b[e].id === a && b[e].destroy();
				Ua([c.plotLines || [], d.plotLines || [], c.plotBands || [], d.plotBands || []], function(b) {
					for (e = b.length; e--;) b[e].id === a && j(b, b[e])
				})
			}
		}), H.prototype.getTimeTicks = function(b, c, d, e) {
			var f, g = [],
				h = {},
				i = O.global.useUTC,
				j = new U(c - W),
				l = b.unitRange,
				m = b.count;
			if (k(c)) {
				l >= S.second && (j.setMilliseconds(0), j.setSeconds(l >= S.minute ? 0 : m * la(j.getSeconds() / m))), l >= S.minute && j[ba](l >= S.hour ? 0 : m * la(j[X]() / m)), l >= S.hour && j[ca](l >= S.day ? 0 : m * la(j[Y]() / m)), l >= S.day && j[da](l >= S.month ? 1 : m * la(j[$]() / m)), l >= S.month && (j[ea](l >= S.year ? 0 : m * la(j[_]() / m)), f = j[aa]()), l >= S.year && (f -= f % m, j[fa](f)), l === S.week && j[da](j[$]() - j[Z]() + n(e, 1)), c = 1, W && (j = new U(j.getTime() + W)), f = j[aa]();
				for (var e = j.getTime(), o = j[_](), p = j[$](), q = (S.day + (i ? W : 6e4 * j.getTimezoneOffset())) % S.day; d > e;) g.push(e), l === S.year ? e = V(f + c * m, 0) : l === S.month ? e = V(f, o + c * m) : i || l !== S.day && l !== S.week ? e += l * m : e = V(f, o, p + c * m * (l === S.day ? 1 : 7)), c++;
				g.push(e), Ua(Va(g, function(a) {
					return l <= S.hour && a % S.day === q
				}), function(a) {
					h[a] = "day"
				})
			}
			return g.info = a(b, {
				higherRanks: h,
				totalRange: l * m
			}), g
		}, H.prototype.normalizeTimeTickInterval = function(a, b) {
			var c, d = b || [
				["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]],
				["second", [1, 2, 5, 10, 15, 30]],
				["minute", [1, 2, 5, 10, 15, 30]],
				["hour", [1, 2, 3, 4, 6, 8, 12]],
				["day", [1, 2]],
				["week", [1, 2]],
				["month", [1, 2, 3, 4, 6]],
				["year", null]
			],
				e = d[d.length - 1],
				f = S[e[0]],
				g = e[1];
			for (c = 0; c < d.length && (e = d[c], f = S[e[0]], g = e[1], !(d[c + 1] && a <= (f * g[g.length - 1] + S[d[c + 1][0]]) / 2)); c++);
			return f === S.year && 5 * f > a && (g = [1, 2, 5]), d = w(a / f, g, "year" === e[0] ? na(v(a / f), 1) : 1), {
				unitRange: f,
				count: d,
				unitName: e[0]
			}
		}, H.prototype.getLogTickPositions = function(a, b, c, d) {
			var e = this.options,
				f = this.len,
				g = [];
			if (d || (this._minorAutoInterval = null), a >= .5) a = ka(a), g = this.getLinearTickPositions(a, b, c);
			else if (a >= .08) for (var j, k, l, m, o, f = la(b), e = a > .3 ? [1, 2, 4] : a > .15 ? [1, 2, 4, 6, 8] : [1, 2, 3, 4, 5, 6, 7, 8, 9]; c + 1 > f && !o; f++) for (k = e.length, j = 0; k > j && !o; j++) l = h(i(f) * e[j]), l > b && (!d || c >= m) && m !== K && g.push(m), m > c && (o = !0), m = l;
			else b = i(b), c = i(c), a = e[d ? "minorTickInterval" : "tickInterval"], a = n("auto" === a ? null : a, this._minorAutoInterval, (c - b) * (e.tickPixelInterval / (d ? 5 : 1)) / ((d ? f / this.tickPositions.length : f) || 1)), a = w(a, null, v(a)), g = Xa(this.getLinearTickPositions(a, b, c), h), d || (this._minorAutoInterval = a / 5);
			return d || (this.tickInterval = a), g
		};
		var lb = ga.Tooltip = function() {
				this.init.apply(this, arguments)
			};
		lb.prototype = {
			init: function(a, b) {
				var d = b.borderWidth,
					e = b.style,
					f = c(e.padding);
				this.chart = a, this.options = b, this.crosshairs = [], this.now = {
					x: 0,
					y: 0
				}, this.isHidden = !0, this.label = a.renderer.label("", 0, 0, b.shape || "callout", null, null, b.useHTML, null, "tooltip").attr({
					padding: f,
					fill: b.backgroundColor,
					"stroke-width": d,
					r: b.borderRadius,
					zIndex: 8
				}).css(e).css({
					padding: 0
				}).add().attr({
					y: -9999
				}), Ea || this.label.shadow(b.shadow), this.shared = b.shared
			},
			destroy: function() {
				this.label && (this.label = this.label.destroy()), clearTimeout(this.hideTimer), clearTimeout(this.tooltipTimeout)
			},
			move: function(b, c, d, e) {
				var f = this,
					g = f.now,
					h = f.options.animation !== !1 && !f.isHidden && (pa(b - g.x) > 1 || pa(c - g.y) > 1),
					i = f.followPointer || f.len > 1;
				a(g, {
					x: h ? (2 * g.x + b) / 3 : b,
					y: h ? (g.y + c) / 2 : c,
					anchorX: i ? K : h ? (2 * g.anchorX + d) / 3 : d,
					anchorY: i ? K : h ? (g.anchorY + e) / 2 : e
				}), f.label.attr(g), h && (clearTimeout(this.tooltipTimeout), this.tooltipTimeout = setTimeout(function() {
					f && f.move(b, c, d, e)
				}, 32))
			},
			hide: function(a) {
				var b, c = this;
				clearTimeout(this.hideTimer), this.isHidden || (b = this.chart.hoverPoints, this.hideTimer = setTimeout(function() {
					c.label.fadeOut(), c.isHidden = !0
				}, n(a, this.options.hideDelay, 500)), b && Ua(b, function(a) {
					a.setState()
				}), this.chart.hoverPoints = null)
			},
			getAnchor: function(a, b) {
				var c, d, e = this.chart,
					f = e.inverted,
					g = e.plotTop,
					h = 0,
					i = 0,
					a = m(a);
				return c = a[0].tooltipPos, this.followPointer && b && (b.chartX === K && (b = e.pointer.normalize(b)), c = [b.chartX - e.plotLeft, b.chartY - g]), c || (Ua(a, function(a) {
					d = a.series.yAxis, h += a.plotX, i += (a.plotLow ? (a.plotLow + a.plotHigh) / 2 : a.plotY) + (!f && d ? d.top - g : 0)
				}), h /= a.length, i /= a.length, c = [f ? e.plotWidth - i : h, this.shared && !f && a.length > 1 && b ? b.chartY - g : f ? e.plotHeight - h : i]), Xa(c, ka)
			},
			getPosition: function(a, b, c) {
				var d, e = this.chart,
					f = this.distance,
					g = {},
					h = ["y", e.chartHeight, b, c.plotY + e.plotTop],
					i = ["x", e.chartWidth, a, c.plotX + e.plotLeft],
					j = c.ttBelow || e.inverted && !c.negative || !e.inverted && c.negative,
					k = function(a, b, c, d) {
						var e = d - f > c,
							b = b > d + f + c,
							c = d - f - c;
						if (d += f, j && b) g[a] = d;
						else if (!j && e) g[a] = c;
						else if (e) g[a] = c;
						else {
							if (!b) return !1;
							g[a] = d
						}
					},
					l = function(a, b, c, d) {
						return f > d || d > b - f ? !1 : void(g[a] = c / 2 > d ? 1 : d > b - c / 2 ? b - c - 2 : d - c / 2)
					},
					m = function(a) {
						var b = h;
						h = i, i = b, d = a
					},
					n = function() {
						k.apply(0, h) !== !1 ? l.apply(0, i) === !1 && !d && (m(!0), n()) : d ? g.x = g.y = 0 : (m(!0), n())
					};
				return (e.inverted || this.len > 1) && m(), n(), g
			},
			defaultFormatter: function(a) {
				var b, c = this.points || m(this),
					d = c[0].series;
				return b = [a.tooltipHeaderFormatter(c[0])], Ua(c, function(a) {
					d = a.series, b.push(d.tooltipFormatter && d.tooltipFormatter(a) || a.point.tooltipFormatter(d.tooltipOptions.pointFormat))
				}), b.push(a.options.footerFormat || ""), b.join("")
			},
			refresh: function(a, b) {
				var c, d, e, f = this.chart,
					g = this.label,
					h = this.options,
					i = {},
					j = [];
				e = h.formatter || this.defaultFormatter;
				var k, i = f.hoverPoints,
					l = this.shared;
				clearTimeout(this.hideTimer), this.followPointer = m(a)[0].series.tooltipOptions.followPointer, d = this.getAnchor(a, b), c = d[0], d = d[1], !l || a.series && a.series.noSharedTooltip ? i = a.getLabelConfig() : (f.hoverPoints = a, i && Ua(i, function(a) {
					a.setState()
				}), Ua(a, function(a) {
					a.setState("hover"), j.push(a.getLabelConfig())
				}), i = {
					x: a[0].category,
					y: a[0].y
				}, i.points = j, this.len = j.length, a = a[0]), e = e.call(i, this), i = a.series, this.distance = n(i.tooltipOptions.distance, 16), e === !1 ? this.hide() : (this.isHidden && (bb(g), g.attr("opacity", 1).show()), g.attr({
					text: e
				}), k = h.borderColor || a.color || i.color || "#606060", g.attr({
					stroke: k
				}), this.updatePosition({
					plotX: c,
					plotY: d,
					negative: a.negative,
					ttBelow: a.ttBelow
				}), this.isHidden = !1), $a(f, "tooltipRefresh", {
					text: e,
					x: c + f.plotLeft,
					y: d + f.plotTop,
					borderColor: k
				})
			},
			updatePosition: function(a) {
				var b = this.chart,
					c = this.label,
					c = (this.options.positioner || this.getPosition).call(this, c.width, c.height, a);
				this.move(ka(c.x), ka(c.y), a.plotX + b.plotLeft, a.plotY + b.plotTop)
			},
			tooltipHeaderFormatter: function(a) {
				var b, c = a.series,
					d = c.tooltipOptions,
					e = d.dateTimeLabelFormats,
					f = d.xDateFormat,
					h = c.xAxis,
					i = h && "datetime" === h.options.type && g(a.key),
					d = d.headerFormat,
					h = h && h.closestPointRange;
				if (i && !f) {
					if (h) {
						for (b in S) if (S[b] >= h || S[b] <= S.day && a.key % S[b] > 0) {
							f = e[b];
							break
						}
					} else f = e.day;
					f = f || e.year
				}
				return i && f && (d = d.replace("{point.key}", "{point.key:" + f + "}")), u(d, {
					point: a,
					series: c
				})
			}
		};
		var mb;
		M = ha.documentElement.ontouchstart !== K;
		var nb = ga.Pointer = function(a, b) {
				this.init(a, b)
			};
		if (nb.prototype = {
			init: function(a, b) {
				var c, d = b.chart,
					e = d.events,
					f = Ea ? "" : d.zoomType,
					d = a.inverted;
				this.options = b, this.chart = a, this.zoomX = c = /x/.test(f), this.zoomY = f = /y/.test(f), this.zoomHor = c && !d || f && d, this.zoomVert = f && !d || c && d, this.hasZoom = c || f, this.runChartClick = e && !! e.click, this.pinchDown = [], this.lastValidTouch = {}, ga.Tooltip && b.tooltip.enabled && (a.tooltip = new lb(a, b.tooltip), this.followTouchMove = b.tooltip.followTouchMove), this.setDOMEvents()
			},
			normalize: function(b, c) {
				var d, e, b = b || window.event,
					b = _a(b);
				return b.target || (b.target = b.srcElement), e = b.touches ? b.touches.length ? b.touches.item(0) : b.changedTouches[0] : b, c || (this.chartPosition = c = Wa(this.chart.container)), e.pageX === K ? (d = na(b.x, b.clientX - c.left), e = b.y) : (d = e.pageX - c.left, e = e.pageY - c.top), a(b, {
					chartX: ka(d),
					chartY: ka(e)
				})
			},
			getCoordinates: function(a) {
				var b = {
					xAxis: [],
					yAxis: []
				};
				return Ua(this.chart.axes, function(c) {
					b[c.isXAxis ? "xAxis" : "yAxis"].push({
						axis: c,
						value: c.toValue(a[c.horiz ? "chartX" : "chartY"])
					})
				}), b
			},
			getIndex: function(a) {
				var b = this.chart;
				return b.inverted ? b.plotHeight + b.plotTop - a.chartY : a.chartX - b.plotLeft
			},
			runPointActions: function(a) {
				var b, c, d, e, f = this.chart,
					g = f.series,
					h = f.tooltip,
					i = f.hoverPoint,
					j = f.hoverSeries,
					k = f.chartWidth,
					l = this.getIndex(a);
				if (h && this.options.tooltip.shared && (!j || !j.noSharedTooltip)) {
					for (c = [], d = g.length, e = 0; d > e; e++) g[e].visible && g[e].options.enableMouseTracking !== !1 && !g[e].noSharedTooltip && g[e].singularTooltips !== !0 && g[e].tooltipPoints.length && (b = g[e].tooltipPoints[l]) && b.series && (b._dist = pa(l - b.clientX), k = oa(k, b._dist), c.push(b));
					for (d = c.length; d--;) c[d]._dist > k && c.splice(d, 1);
					c.length && c[0].clientX !== this.hoverX && (h.refresh(c, a), this.hoverX = c[0].clientX)
				}
				g = j && j.tooltipOptions.followPointer, j && j.tracker && !g ? (b = j.tooltipPoints[l]) && b !== i && b.onMouseOver(a) : h && g && !h.isHidden && (j = h.getAnchor([{}], a), h.updatePosition({
					plotX: j[0],
					plotY: j[1]
				})), h && !this._onDocumentMouseMove && (this._onDocumentMouseMove = function(a) {
					Ia[mb] && Ia[mb].pointer.onDocumentMouseMove(a)
				}, Ya(ha, "mousemove", this._onDocumentMouseMove)), Ua(f.axes, function(c) {
					c.drawCrosshair(a, n(b, i))
				})
			},
			reset: function(a, b) {
				var c = this.chart,
					d = c.hoverSeries,
					e = c.hoverPoint,
					f = c.tooltip,
					g = f && f.shared ? c.hoverPoints : e;
				(a = a && f && g) && m(g)[0].plotX === K && (a = !1), a ? (f.refresh(g), e && e.setState(e.state, !0)) : (e && e.onMouseOut(), d && d.onMouseOut(), f && f.hide(b), this._onDocumentMouseMove && (Za(ha, "mousemove", this._onDocumentMouseMove), this._onDocumentMouseMove = null), Ua(c.axes, function(a) {
					a.hideCrosshair()
				}), this.hoverX = null)
			},
			scaleGroups: function(a, b) {
				var c, d = this.chart;
				Ua(d.series, function(e) {
					c = a || e.getPlotBox(), e.xAxis && e.xAxis.zoomEnabled && (e.group.attr(c), e.markerGroup && (e.markerGroup.attr(c), e.markerGroup.clip(b ? d.clipRect : null)), e.dataLabelsGroup && e.dataLabelsGroup.attr(c))
				}), d.clipRect.attr(b || d.clipBox)
			},
			dragStart: function(a) {
				var b = this.chart;
				b.mouseIsDown = a.type, b.cancelClick = !1, b.mouseDownX = this.mouseDownX = a.chartX, b.mouseDownY = this.mouseDownY = a.chartY
			},
			drag: function(a) {
				var b, c = this.chart,
					d = c.options.chart,
					e = a.chartX,
					f = a.chartY,
					g = this.zoomHor,
					h = this.zoomVert,
					i = c.plotLeft,
					j = c.plotTop,
					k = c.plotWidth,
					l = c.plotHeight,
					m = this.mouseDownX,
					n = this.mouseDownY,
					o = d.panKey && a[d.panKey + "Key"];
				i > e ? e = i : e > i + k && (e = i + k), j > f ? f = j : f > j + l && (f = j + l), this.hasDragged = Math.sqrt(Math.pow(m - e, 2) + Math.pow(n - f, 2)), this.hasDragged > 10 && (b = c.isInsidePlot(m - i, n - j), c.hasCartesianSeries && (this.zoomX || this.zoomY) && b && !o && !this.selectionMarker && (this.selectionMarker = c.renderer.rect(i, j, g ? 1 : k, h ? 1 : l, 0).attr({
					fill: d.selectionMarkerFill || "rgba(69,114,167,0.25)",
					zIndex: 7
				}).add()), this.selectionMarker && g && (e -= m, this.selectionMarker.attr({
					width: pa(e),
					x: (e > 0 ? 0 : e) + m
				})), this.selectionMarker && h && (e = f - n, this.selectionMarker.attr({
					height: pa(e),
					y: (e > 0 ? 0 : e) + n
				})), b && !this.selectionMarker && d.panning && c.pan(a, d.panning))
			},
			drop: function(b) {
				var c = this.chart,
					d = this.hasPinched;
				if (this.selectionMarker) {
					var e, f = {
						xAxis: [],
						yAxis: [],
						originalEvent: b.originalEvent || b
					},
						g = this.selectionMarker,
						h = g.attr ? g.attr("x") : g.x,
						i = g.attr ? g.attr("y") : g.y,
						j = g.attr ? g.attr("width") : g.width,
						k = g.attr ? g.attr("height") : g.height;
					(this.hasDragged || d) && (Ua(c.axes, function(a) {
						if (a.zoomEnabled) {
							var c = a.horiz,
								d = "touchend" === b.type ? a.minPixelPadding : 0,
								g = a.toValue((c ? h : i) + d),
								c = a.toValue((c ? h + j : i + k) - d);
							!isNaN(g) && !isNaN(c) && (f[a.coll].push({
								axis: a,
								min: oa(g, c),
								max: na(g, c)
							}), e = !0)
						}
					}), e && $a(c, "selection", f, function(b) {
						c.zoom(a(b, d ? {
							animation: !1
						} : null))
					})), this.selectionMarker = this.selectionMarker.destroy(), d && this.scaleGroups()
				}
				c && (o(c.container, {
					cursor: c._cursor
				}), c.cancelClick = this.hasDragged > 10, c.mouseIsDown = this.hasDragged = this.hasPinched = !1, this.pinchDown = [])
			},
			onContainerMouseDown: function(a) {
				a = this.normalize(a), a.preventDefault && a.preventDefault(), this.dragStart(a)
			},
			onDocumentMouseUp: function(a) {
				Ia[mb] && Ia[mb].pointer.drop(a)
			},
			onDocumentMouseMove: function(a) {
				var b = this.chart,
					c = this.chartPosition,
					d = b.hoverSeries,
					a = this.normalize(a, c);
				c && d && !this.inClass(a.target, "highcharts-tracker") && !b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop) && this.reset()
			},
			onContainerMouseLeave: function() {
				var a = Ia[mb];
				a && (a.pointer.reset(), a.pointer.chartPosition = null)
			},
			onContainerMouseMove: function(a) {
				var b = this.chart;
				mb = b.index, a = this.normalize(a), a.returnValue = !1, "mousedown" === b.mouseIsDown && this.drag(a), (this.inClass(a.target, "highcharts-tracker") || b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop)) && !b.openMenu && this.runPointActions(a)
			},
			inClass: function(a, b) {
				for (var c; a;) {
					if (c = l(a, "class")) {
						if (-1 !== c.indexOf(b)) return !0;
						if (-1 !== c.indexOf("highcharts-container")) return !1
					}
					a = a.parentNode
				}
			},
			onTrackerMouseOut: function(a) {
				var b = this.chart.hoverSeries,
					c = (a = a.relatedTarget || a.toElement) && a.point && a.point.series;
				!b || b.options.stickyTracking || this.inClass(a, "highcharts-tooltip") || c === b || b.onMouseOut()
			},
			onContainerClick: function(b) {
				var c = this.chart,
					d = c.hoverPoint,
					e = c.plotLeft,
					f = c.plotTop,
					b = this.normalize(b);
				b.cancelBubble = !0, c.cancelClick || (d && this.inClass(b.target, "highcharts-tracker") ? ($a(d.series, "click", a(b, {
					point: d
				})), c.hoverPoint && d.firePointEvent("click", b)) : (a(b, this.getCoordinates(b)), c.isInsidePlot(b.chartX - e, b.chartY - f) && $a(c, "click", b)))
			},
			setDOMEvents: function() {
				var a = this,
					b = a.chart.container;
				b.onmousedown = function(b) {
					a.onContainerMouseDown(b)
				}, b.onmousemove = function(b) {
					a.onContainerMouseMove(b)
				}, b.onclick = function(b) {
					a.onContainerClick(b)
				}, Ya(b, "mouseleave", a.onContainerMouseLeave), 1 === Ja && Ya(ha, "mouseup", a.onDocumentMouseUp), M && (b.ontouchstart = function(b) {
					a.onContainerTouchStart(b)
				}, b.ontouchmove = function(b) {
					a.onContainerTouchMove(b)
				}, 1 === Ja && Ya(ha, "touchend", a.onDocumentTouchEnd))
			},
			destroy: function() {
				var a;
				Za(this.chart.container, "mouseleave", this.onContainerMouseLeave), Ja || (Za(ha, "mouseup", this.onDocumentMouseUp), Za(ha, "touchend", this.onDocumentTouchEnd)), clearInterval(this.tooltipTimeout);
				for (a in this) this[a] = null
			}
		}, a(ga.Pointer.prototype, {
			pinchTranslate: function(a, b, c, d, e, f) {
				(this.zoomHor || this.pinchHor) && this.pinchTranslateDirection(!0, a, b, c, d, e, f), (this.zoomVert || this.pinchVert) && this.pinchTranslateDirection(!1, a, b, c, d, e, f)
			},
			pinchTranslateDirection: function(a, b, c, d, e, f, g, h) {
				var i, j, k, l = this.chart,
					m = a ? "x" : "y",
					n = a ? "X" : "Y",
					o = "chart" + n,
					p = a ? "width" : "height",
					q = l["plot" + (a ? "Left" : "Top")],
					r = h || 1,
					s = l.inverted,
					t = l.bounds[a ? "h" : "v"],
					u = 1 === b.length,
					v = b[0][o],
					w = c[0][o],
					x = !u && b[1][o],
					y = !u && c[1][o],
					c = function() {
						!u && pa(v - x) > 20 && (r = h || pa(w - y) / pa(v - x)), j = (q - w) / r + v, i = l["plot" + (a ? "Width" : "Height")] / r
					};
				c(), b = j, b < t.min ? (b = t.min, k = !0) : b + i > t.max && (b = t.max - i, k = !0), k ? (w -= .8 * (w - g[m][0]), u || (y -= .8 * (y - g[m][1])), c()) : g[m] = [w, y], s || (f[m] = j - q, f[p] = i), f = s ? 1 / r : r, e[p] = i, e[m] = b, d[s ? a ? "scaleY" : "scaleX" : "scale" + n] = r, d["translate" + n] = f * q + (w - f * v)
			},
			pinch: function(b) {
				var c = this,
					d = c.chart,
					e = c.pinchDown,
					f = c.followTouchMove,
					g = b.touches,
					h = g.length,
					i = c.lastValidTouch,
					j = c.hasZoom,
					k = c.selectionMarker,
					l = {},
					m = 1 === h && (c.inClass(b.target, "highcharts-tracker") && d.runTrackerClick || c.runChartClick),
					o = {};
				(j || f) && !m && b.preventDefault(), Xa(g, function(a) {
					return c.normalize(a)
				}), "touchstart" === b.type ? (Ua(g, function(a, b) {
					e[b] = {
						chartX: a.chartX,
						chartY: a.chartY
					}
				}), i.x = [e[0].chartX, e[1] && e[1].chartX], i.y = [e[0].chartY, e[1] && e[1].chartY], Ua(d.axes, function(a) {
					if (a.zoomEnabled) {
						var b = d.bounds[a.horiz ? "h" : "v"],
							c = a.minPixelPadding,
							e = a.toPixels(n(a.options.min, a.dataMin)),
							f = a.toPixels(n(a.options.max, a.dataMax)),
							g = oa(e, f),
							e = na(e, f);
						b.min = oa(a.pos, g - c), b.max = na(a.pos + a.len, e + c)
					}
				}), c.res = !0) : e.length && (k || (c.selectionMarker = k = a({
					destroy: Ha
				}, d.plotBox)), c.pinchTranslate(e, g, l, k, o, i), c.hasPinched = j, c.scaleGroups(l, o), !j && f && 1 === h ? this.runPointActions(c.normalize(b)) : c.res && (c.res = !1, this.reset(!1, 0)))
			},
			onContainerTouchStart: function(a) {
				var b = this.chart;
				mb = b.index, 1 === a.touches.length ? (a = this.normalize(a), b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop) ? (this.runPointActions(a), this.pinch(a)) : this.reset()) : 2 === a.touches.length && this.pinch(a)
			},
			onContainerTouchMove: function(a) {
				(1 === a.touches.length || 2 === a.touches.length) && this.pinch(a)
			},
			onDocumentTouchEnd: function(a) {
				Ia[mb] && Ia[mb].pointer.drop(a)
			}
		}), ia.PointerEvent || ia.MSPointerEvent) {
			var ob = {},
				pb = !! ia.PointerEvent,
				qb = function() {
					var a, b = [];
					b.item = function(a) {
						return this[a]
					};
					for (a in ob) ob.hasOwnProperty(a) && b.push({
						pageX: ob[a].pageX,
						pageY: ob[a].pageY,
						target: ob[a].target
					});
					return b
				},
				rb = function(a, b, c, d) {
					a = a.originalEvent || a, "touch" !== a.pointerType && a.pointerType !== a.MSPOINTER_TYPE_TOUCH || !Ia[mb] || (d(a), d = Ia[mb].pointer, d[b]({
						type: c,
						target: a.currentTarget,
						preventDefault: Ha,
						touches: qb()
					}))
				};
			a(nb.prototype, {
				onContainerPointerDown: function(a) {
					rb(a, "onContainerTouchStart", "touchstart", function(a) {
						ob[a.pointerId] = {
							pageX: a.pageX,
							pageY: a.pageY,
							target: a.currentTarget
						}
					})
				},
				onContainerPointerMove: function(a) {
					rb(a, "onContainerTouchMove", "touchmove", function(a) {
						ob[a.pointerId] = {
							pageX: a.pageX,
							pageY: a.pageY
						}, ob[a.pointerId].target || (ob[a.pointerId].target = a.currentTarget)
					})
				},
				onDocumentPointerUp: function(a) {
					rb(a, "onContainerTouchEnd", "touchend", function(a) {
						delete ob[a.pointerId]
					})
				},
				batchMSEvents: function(a) {
					a(this.chart.container, pb ? "pointerdown" : "MSPointerDown", this.onContainerPointerDown), a(this.chart.container, pb ? "pointermove" : "MSPointerMove", this.onContainerPointerMove), a(ha, pb ? "pointerup" : "MSPointerUp", this.onDocumentPointerUp)
				}
			}), t(nb.prototype, "init", function(a, b, c) {
				a.call(this, b, c), (this.hasZoom || this.followTouchMove) && o(b.container, {
					"-ms-touch-action": La,
					"touch-action": La
				})
			}), t(nb.prototype, "setDOMEvents", function(a) {
				a.apply(this), (this.hasZoom || this.followTouchMove) && this.batchMSEvents(Ya)
			}), t(nb.prototype, "destroy", function(a) {
				this.batchMSEvents(Za), a.call(this)
			})
		}
		var sb = ga.Legend = function(a, b) {
				this.init(a, b)
			};
		sb.prototype = {
			init: function(a, c) {
				var d = this,
					e = c.itemStyle,
					f = n(c.padding, 8),
					g = c.itemMarginTop || 0;
				this.options = c, c.enabled && (d.itemStyle = e, d.itemHiddenStyle = b(e, c.itemHiddenStyle), d.itemMarginTop = g, d.padding = f, d.initialItemX = f, d.initialItemY = f - 5, d.maxItemWidth = 0, d.chart = a, d.itemHeight = 0, d.lastLineHeight = 0, d.symbolWidth = n(c.symbolWidth, 16), d.pages = [], d.render(), Ya(d.chart, "endResize", function() {
					d.positionCheckboxes()
				}))
			},
			colorizeItem: function(a, b) {
				var c, d = this.options,
					e = a.legendItem,
					f = a.legendLine,
					g = a.legendSymbol,
					h = this.itemHiddenStyle.color,
					d = b ? d.itemStyle.color : h,
					i = b ? a.legendColor || a.color || "#CCC" : h,
					h = a.options && a.options.marker,
					j = {
						fill: i
					};
				if (e && e.css({
					fill: d,
					color: d
				}), f && f.attr({
					stroke: i
				}), g) {
					if (h && g.isMarker) for (c in j.stroke = i, h = a.convertAttribs(h)) e = h[c], e !== K && (j[c] = e);
					g.attr(j)
				}
			},
			positionItem: function(a) {
				var b = this.options,
					c = b.symbolPadding,
					b = !b.rtl,
					d = a._legendItemPos,
					e = d[0],
					d = d[1],
					f = a.checkbox;
				a.legendGroup && a.legendGroup.translate(b ? e : this.legendWidth - e - 2 * c - 4, d), f && (f.x = e, f.y = d)
			},
			destroyItem: function(a) {
				var b = a.checkbox;
				Ua(["legendItem", "legendLine", "legendSymbol", "legendGroup"], function(b) {
					a[b] && (a[b] = a[b].destroy())
				}), b && B(a.checkbox)
			},
			destroy: function() {
				var a = this.group,
					b = this.box;
				b && (this.box = b.destroy()), a && (this.group = a.destroy())
			},
			positionCheckboxes: function(a) {
				var b, c = this.group.alignAttr,
					d = this.clipHeight || this.legendHeight;
				c && (b = c.translateY, Ua(this.allItems, function(e) {
					var f, g = e.checkbox;
					g && (f = b + g.y + (a || 0) + 3, o(g, {
						left: c.translateX + e.checkboxOffset + g.x - 20 + "px",
						top: f + "px",
						display: f > b - 6 && b + d - 6 > f ? "" : La
					}))
				}))
			},
			renderTitle: function() {
				var a = this.padding,
					b = this.options.title,
					c = 0;
				b.text && (this.title || (this.title = this.chart.renderer.label(b.text, a - 3, a - 4, null, null, null, null, null, "legend-title").attr({
					zIndex: 1
				}).css(b.style).add(this.group)), a = this.title.getBBox(), c = a.height, this.offsetWidth = a.width, this.contentGroup.attr({
					translateY: c
				})), this.titleHeight = c
			},
			renderItem: function(a) {
				var c = this.chart,
					d = c.renderer,
					e = this.options,
					f = "horizontal" === e.layout,
					g = this.symbolWidth,
					h = e.symbolPadding,
					i = this.itemStyle,
					j = this.itemHiddenStyle,
					k = this.padding,
					l = f ? n(e.itemDistance, 20) : 0,
					m = !e.rtl,
					o = e.width,
					p = e.itemMarginBottom || 0,
					q = this.itemMarginTop,
					r = this.initialItemX,
					s = a.legendItem,
					t = a.series && a.series.drawLegendSymbol ? a.series : a,
					v = t.options,
					v = this.createCheckboxForItem && v && v.showCheckbox,
					w = e.useHTML;
				s || (a.legendGroup = d.g("legend-item").attr({
					zIndex: 1
				}).add(this.scrollGroup), a.legendItem = s = d.text(e.labelFormat ? u(e.labelFormat, a) : e.labelFormatter.call(a), m ? g + h : -h, this.baseline || 0, w).css(b(a.visible ? i : j)).attr({
					align: m ? "left" : "right",
					zIndex: 2
				}).add(a.legendGroup), this.baseline || (this.baseline = d.fontMetrics(i.fontSize, s).f + 3 + q, s.attr("y", this.baseline)), t.drawLegendSymbol(this, a), this.setItemEvents && this.setItemEvents(a, s, w, i, j), this.colorizeItem(a, a.visible), v && this.createCheckboxForItem(a)), d = s.getBBox(), g = a.checkboxOffset = e.itemWidth || a.legendItemWidth || g + h + d.width + l + (v ? 20 : 0), this.itemHeight = h = ka(a.legendItemHeight || d.height), f && this.itemX - r + g > (o || c.chartWidth - 2 * k - r - e.x) && (this.itemX = r, this.itemY += q + this.lastLineHeight + p, this.lastLineHeight = 0), this.maxItemWidth = na(this.maxItemWidth, g), this.lastItemY = q + this.itemY + p, this.lastLineHeight = na(h, this.lastLineHeight), a._legendItemPos = [this.itemX, this.itemY], f ? this.itemX += g : (this.itemY += q + h + p, this.lastLineHeight = h), this.offsetWidth = o || na((f ? this.itemX - r - l : g) + k, this.offsetWidth)
			},
			getAllItems: function() {
				var a = [];
				return Ua(this.chart.series, function(b) {
					var c = b.options;
					n(c.showInLegend, k(c.linkedTo) ? !1 : K, !0) && (a = a.concat(b.legendItems || ("point" === c.legendType ? b.data : b)))
				}), a
			},
			render: function() {
				var b, c, d, e, f = this,
					g = f.chart,
					h = g.renderer,
					i = f.group,
					j = f.box,
					k = f.options,
					l = f.padding,
					m = k.borderWidth,
					n = k.backgroundColor;
				f.itemX = f.initialItemX, f.itemY = f.initialItemY, f.offsetWidth = 0, f.lastItemY = 0, i || (f.group = i = h.g("legend").attr({
					zIndex: 7
				}).add(), f.contentGroup = h.g().attr({
					zIndex: 1
				}).add(i), f.scrollGroup = h.g().add(f.contentGroup)), f.renderTitle(), b = f.getAllItems(), x(b, function(a, b) {
					return (a.options && a.options.legendIndex || 0) - (b.options && b.options.legendIndex || 0)
				}), k.reversed && b.reverse(), f.allItems = b, f.display = c = !! b.length, Ua(b, function(a) {
					f.renderItem(a)
				}), d = k.width || f.offsetWidth, e = f.lastItemY + f.lastLineHeight + f.titleHeight, e = f.handleOverflow(e), (m || n) && (d += l, e += l, j ? d > 0 && e > 0 && (j[j.isNew ? "attr" : "animate"](j.crisp({
					width: d,
					height: e
				})), j.isNew = !1) : (f.box = j = h.rect(0, 0, d, e, k.borderRadius, m || 0).attr({
					stroke: k.borderColor,
					"stroke-width": m || 0,
					fill: n || La
				}).add(i).shadow(k.shadow), j.isNew = !0), j[c ? "show" : "hide"]()), f.legendWidth = d, f.legendHeight = e, Ua(b, function(a) {
					f.positionItem(a)
				}), c && i.align(a({
					width: d,
					height: e
				}, k), !0, "spacingBox"), g.isResizing || this.positionCheckboxes()
			},
			handleOverflow: function(a) {
				var b, c, d = this,
					e = this.chart,
					f = e.renderer,
					g = this.options,
					h = g.y,
					h = e.spacingBox.height + ("top" === g.verticalAlign ? -h : h) - this.padding,
					i = g.maxHeight,
					j = this.clipRect,
					k = g.navigation,
					l = n(k.animation, !0),
					m = k.arrowSize || 12,
					o = this.nav,
					p = this.pages,
					q = this.allItems;
				return "horizontal" === g.layout && (h /= 2), i && (h = oa(h, i)), p.length = 0, a > h && !g.useHTML ? (this.clipHeight = b = na(h - 20 - this.titleHeight - this.padding, 0), this.currentPage = n(this.currentPage, 1), this.fullHeight = a, Ua(q, function(a, d) {
					var e = a._legendItemPos[1],
						f = ka(a.legendItem.getBBox().height),
						g = p.length;
					(!g || e - p[g - 1] > b && (c || e) !== p[g - 1]) && (p.push(c || e), g++), d === q.length - 1 && e + f - p[g - 1] > b && p.push(e), e !== c && (c = e)
				}), j || (j = d.clipRect = f.clipRect(0, this.padding, 9999, 0), d.contentGroup.clip(j)), j.attr({
					height: b
				}), o || (this.nav = o = f.g().attr({
					zIndex: 1
				}).add(this.group), this.up = f.symbol("triangle", 0, 0, m, m).on("click", function() {
					d.scroll(-1, l)
				}).add(o), this.pager = f.text("", 15, 10).css(k.style).add(o), this.down = f.symbol("triangle-down", 0, 0, m, m).on("click", function() {
					d.scroll(1, l)
				}).add(o)), d.scroll(0), a = h) : o && (j.attr({
					height: e.chartHeight
				}), o.hide(), this.scrollGroup.attr({
					translateY: 1
				}), this.clipHeight = 0), a
			},
			scroll: function(a, b) {
				var c = this.pages,
					d = c.length,
					e = this.currentPage + a,
					f = this.clipHeight,
					g = this.options.navigation,
					h = g.activeColor,
					g = g.inactiveColor,
					i = this.pager,
					j = this.padding;
				e > d && (e = d), e > 0 && (b !== K && D(b, this.chart), this.nav.attr({
					translateX: j,
					translateY: f + this.padding + 7 + this.titleHeight,
					visibility: "visible"
				}), this.up.attr({
					fill: 1 === e ? g : h
				}).css({
					cursor: 1 === e ? "default" : "pointer"
				}), i.attr({
					text: e + "/" + d
				}), this.down.attr({
					x: 18 + this.pager.getBBox().width,
					fill: e === d ? g : h
				}).css({
					cursor: e === d ? "default" : "pointer"
				}), c = -c[e - 1] + this.initialItemY, this.scrollGroup.animate({
					translateY: c
				}), this.currentPage = e, this.positionCheckboxes(c))
			}
		}, Qa = ga.LegendSymbolMixin = {
			drawRectangle: function(a, b) {
				var c = a.options.symbolHeight || 12;
				b.legendSymbol = this.chart.renderer.rect(0, a.baseline - 5 - c / 2, a.symbolWidth, c, a.options.symbolRadius || 0).attr({
					zIndex: 3
				}).add(b.legendGroup)
			},
			drawLineMarker: function(a) {
				var b, c = this.options,
					d = c.marker;
				b = a.symbolWidth;
				var e, f = this.chart.renderer,
					g = this.legendGroup,
					a = a.baseline - ka(.3 * f.fontMetrics(a.options.itemStyle.fontSize, this.legendItem).b);
				c.lineWidth && (e = {
					"stroke-width": c.lineWidth
				}, c.dashStyle && (e.dashstyle = c.dashStyle), this.legendLine = f.path(["M", 0, a, "L", b, a]).attr(e).add(g)), d && d.enabled !== !1 && (c = d.radius, this.legendSymbol = b = f.symbol(this.symbol, b / 2 - c, a - c, 2 * c, 2 * c).add(g), b.isMarker = !0)
			}
		}, (/Trident\/7\.0/.test(ua) || za) && t(sb.prototype, "positionItem", function(a, b) {
			var c = this,
				d = function() {
					b._legendItemPos && a.call(c, b)
				};
			d(), setTimeout(d)
		}), I.prototype = {
			init: function(a, c) {
				var d, e = a.series;
				a.series = null, d = b(O, a), d.series = a.series = e, this.userOptions = a, e = d.chart, this.margin = this.splashArray("margin", e), this.spacing = this.splashArray("spacing", e);
				var f = e.events;
				this.bounds = {
					h: {},
					v: {}
				}, this.callback = c, this.isResizing = 0, this.options = d, this.axes = [], this.series = [], this.hasCartesianSeries = e.showAxes;
				var g, h = this;
				if (h.index = Ia.length, Ia.push(h), Ja++, e.reflow !== !1 && Ya(h, "load", function() {
					h.initReflow()
				}), f) for (g in f) Ya(h, g, f[g]);
				h.xAxis = [], h.yAxis = [], h.animation = Ea ? !1 : n(e.animation, !0), h.pointCount = h.colorCounter = h.symbolCounter = 0, h.firstRender()
			},
			initSeries: function(a) {
				var b = this.options.chart;
				return (b = Oa[a.type || b.type || b.defaultSeriesType]) || T(17, !0), b = new b, b.init(this, a), b
			},
			isInsidePlot: function(a, b, c) {
				var d = c ? b : a,
					a = c ? a : b;
				return d >= 0 && d <= this.plotWidth && a >= 0 && a <= this.plotHeight
			},
			adjustTickAmounts: function() {
				this.options.chart.alignTicks !== !1 && Ua(this.axes, function(a) {
					a.adjustTickAmount()
				}), this.maxTicks = null
			},
			redraw: function(b) {
				var c, d, e = this.axes,
					f = this.series,
					g = this.pointer,
					h = this.legend,
					i = this.isDirtyLegend,
					j = this.hasCartesianSeries,
					k = this.isDirtyBox,
					l = f.length,
					m = l,
					n = this.renderer,
					o = n.isHidden(),
					p = [];
				for (D(b, this), o && this.cloneRenderTo(), this.layOutTitles(); m--;) if (b = f[m], b.options.stacking && (c = !0, b.isDirty)) {
					d = !0;
					break
				}
				if (d) for (m = l; m--;) b = f[m], b.options.stacking && (b.isDirty = !0);
				Ua(f, function(a) {
					a.isDirty && "point" === a.options.legendType && (i = !0)
				}), i && h.options.enabled && (h.render(), this.isDirtyLegend = !1), c && this.getStacks(), j && (this.isResizing || (this.maxTicks = null, Ua(e, function(a) {
					a.setScale()
				})), this.adjustTickAmounts()), this.getMargins(), j && (Ua(e, function(a) {
					a.isDirty && (k = !0)
				}), Ua(e, function(b) {
					b.isDirtyExtremes && (b.isDirtyExtremes = !1, p.push(function() {
						$a(b, "afterSetExtremes", a(b.eventArgs, b.getExtremes())), delete b.eventArgs
					})), (k || c) && b.redraw()
				})), k && this.drawChartBox(), Ua(f, function(a) {
					a.isDirty && a.visible && (!a.isCartesian || a.xAxis) && a.redraw()
				}), g && g.reset(!0), n.draw(), $a(this, "redraw"), o && this.cloneRenderTo(!0), Ua(p, function(a) {
					a.call()
				})
			},
			get: function(a) {
				var b, c, d = this.axes,
					e = this.series;
				for (b = 0; b < d.length; b++) if (d[b].options.id === a) return d[b];
				for (b = 0; b < e.length; b++) if (e[b].options.id === a) return e[b];
				for (b = 0; b < e.length; b++) for (c = e[b].points || [], d = 0; d < c.length; d++) if (c[d].id === a) return c[d];
				return null
			},
			getAxes: function() {
				var a = this,
					b = this.options,
					c = b.xAxis = m(b.xAxis || {}),
					b = b.yAxis = m(b.yAxis || {});
				Ua(c, function(a, b) {
					a.index = b, a.isX = !0
				}), Ua(b, function(a, b) {
					a.index = b
				}), c = c.concat(b), Ua(c, function(b) {
					new H(a, b)
				}), a.adjustTickAmounts()
			},
			getSelectedPoints: function() {
				var a = [];
				return Ua(this.series, function(b) {
					a = a.concat(Va(b.points || [], function(a) {
						return a.selected
					}))
				}), a
			},
			getSelectedSeries: function() {
				return Va(this.series, function(a) {
					return a.selected
				})
			},
			getStacks: function() {
				var a = this;
				Ua(a.yAxis, function(a) {
					a.stacks && a.hasVisibleSeries && (a.oldStacks = a.stacks)
				}), Ua(a.series, function(b) {
					!b.options.stacking || b.visible !== !0 && a.options.chart.ignoreHiddenSeries !== !1 || (b.stackKey = b.type + n(b.options.stack, ""))
				})
			},
			setTitle: function(a, c, d) {
				var e, f, g = this,
					h = g.options;
				f = h.title = b(h.title, a), e = h.subtitle = b(h.subtitle, c), h = e, Ua([
					["title", a, f],
					["subtitle", c, h]
				], function(a) {
					var b = a[0],
						c = g[b],
						d = a[1],
						a = a[2];
					c && d && (g[b] = c = c.destroy()), a && a.text && !c && (g[b] = g.renderer.text(a.text, 0, 0, a.useHTML).attr({
						align: a.align,
						"class": "highcharts-" + b,
						zIndex: a.zIndex || 4
					}).css(a.style).add())
				}), g.layOutTitles(d)
			},
			layOutTitles: function(b) {
				var c = 0,
					d = this.title,
					e = this.subtitle,
					f = this.options,
					g = f.title,
					f = f.subtitle,
					h = this.renderer,
					i = this.spacingBox.width - 44;
				!d || (d.css({
					width: (g.width || i) + "px"
				}).align(a({
					y: h.fontMetrics(g.style.fontSize, d).b - 3
				}, g), !1, "spacingBox"), g.floating || g.verticalAlign) || (c = d.getBBox().height), e && (e.css({
					width: (f.width || i) + "px"
				}).align(a({
					y: c + (g.margin - 13) + h.fontMetrics(g.style.fontSize, e).b
				}, f), !1, "spacingBox"), !f.floating && !f.verticalAlign && (c = ma(c + e.getBBox().height))), d = this.titleOffset !== c, this.titleOffset = c, !this.isDirtyBox && d && (this.isDirtyBox = d, this.hasRendered && n(b, !0) && this.isDirtyBox && this.redraw())
			},
			getChartSize: function() {
				var a = this.options.chart,
					b = a.width,
					a = a.height,
					c = this.renderToClone || this.renderTo;
				k(b) || (this.containerWidth = Ra(c, "width")), k(a) || (this.containerHeight = Ra(c, "height")), this.chartWidth = na(0, b || this.containerWidth || 600), this.chartHeight = na(0, n(a, this.containerHeight > 19 ? this.containerHeight : 400))
			},
			cloneRenderTo: function(a) {
				var b = this.renderToClone,
					c = this.container;
				a ? b && (this.renderTo.appendChild(c), B(b), delete this.renderToClone) : (c && c.parentNode === this.renderTo && this.renderTo.removeChild(c), this.renderToClone = b = this.renderTo.cloneNode(0), o(b, {
					position: "absolute",
					top: "-9999px",
					display: "block"
				}), b.style.setProperty && b.style.setProperty("display", "block", "important"), ha.body.appendChild(b), c && b.appendChild(c))
			},
			getContainer: function() {
				var b, e, f, g, h = this.options.chart;
				this.renderTo = b = h.renderTo, g = "highcharts-" + Ga++, d(b) && (this.renderTo = b = ha.getElementById(b)), b || T(13, !0), e = c(l(b, "data-highcharts-chart")), !isNaN(e) && Ia[e] && Ia[e].hasRendered && Ia[e].destroy(), l(b, "data-highcharts-chart", this.index), b.innerHTML = "", !h.skipClone && !b.offsetWidth && this.cloneRenderTo(), this.getChartSize(), e = this.chartWidth, f = this.chartHeight, this.container = b = p(Ka, {
					className: "highcharts-container" + (h.className ? " " + h.className : ""),
					id: g
				}, a({
					position: "relative",
					overflow: "hidden",
					width: e + "px",
					height: f + "px",
					textAlign: "left",
					lineHeight: "normal",
					zIndex: 0,
					"-webkit-tap-highlight-color": "rgba(0,0,0,0)"
				}, h.style), this.renderToClone || b), this._cursor = b.style.cursor, this.renderer = h.forExport ? new hb(b, e, f, h.style, !0) : new L(b, e, f, h.style), Ea && this.renderer.create(this, b, e, f)
			},
			getMargins: function() {
				var a, b = this.spacing,
					c = this.legend,
					d = this.margin,
					e = this.options.legend,
					f = n(e.margin, 20),
					g = e.x,
					h = e.y,
					i = e.align,
					j = e.verticalAlign,
					l = this.titleOffset;
				this.resetMargins(), a = this.axisOffset, l && !k(d[0]) && (this.plotTop = na(this.plotTop, l + this.options.title.margin + b[0])), c.display && !e.floating && ("right" === i ? k(d[1]) || (this.marginRight = na(this.marginRight, c.legendWidth - g + f + b[1])) : "left" === i ? k(d[3]) || (this.plotLeft = na(this.plotLeft, c.legendWidth + g + f + b[3])) : "top" === j ? k(d[0]) || (this.plotTop = na(this.plotTop, c.legendHeight + h + f + b[0])) : "bottom" !== j || k(d[2]) || (this.marginBottom = na(this.marginBottom, c.legendHeight - h + f + b[2]))), this.extraBottomMargin && (this.marginBottom += this.extraBottomMargin), this.extraTopMargin && (this.plotTop += this.extraTopMargin), this.hasCartesianSeries && Ua(this.axes, function(a) {
					a.getOffset()
				}), k(d[3]) || (this.plotLeft += a[3]), k(d[0]) || (this.plotTop += a[0]), k(d[2]) || (this.marginBottom += a[2]), k(d[1]) || (this.marginRight += a[1]), this.setChartSize()
			},
			reflow: function(a) {
				var b = this,
					c = b.options.chart,
					d = b.renderTo,
					e = c.width || Ra(d, "width"),
					f = c.height || Ra(d, "height"),
					c = a ? a.target : ia,
					d = function() {
						b.container && (b.setSize(e, f, !1), b.hasUserSize = null)
					};
				b.hasUserSize || !e || !f || c !== ia && c !== ha || ((e !== b.containerWidth || f !== b.containerHeight) && (clearTimeout(b.reflowTimeout), a ? b.reflowTimeout = setTimeout(d, 100) : d()), b.containerWidth = e, b.containerHeight = f)
			},
			initReflow: function() {
				var a = this,
					b = function(b) {
						a.reflow(b)
					};
				Ya(ia, "resize", b), Ya(a, "destroy", function() {
					Za(ia, "resize", b)
				})
			},
			setSize: function(a, b, c) {
				var d, e, f, g = this;
				g.isResizing += 1, f = function() {
					g && $a(g, "endResize", null, function() {
						g.isResizing -= 1
					})
				}, D(c, g), g.oldChartHeight = g.chartHeight, g.oldChartWidth = g.chartWidth, k(a) && (g.chartWidth = d = na(0, ka(a)), g.hasUserSize = !! d), k(b) && (g.chartHeight = e = na(0, ka(b))), (Q ? ab : o)(g.container, {
					width: d + "px",
					height: e + "px"
				}, Q), g.setChartSize(!0), g.renderer.setSize(d, e, c), g.maxTicks = null, Ua(g.axes, function(a) {
					a.isDirty = !0, a.setScale()
				}), Ua(g.series, function(a) {
					a.isDirty = !0
				}), g.isDirtyLegend = !0, g.isDirtyBox = !0, g.layOutTitles(), g.getMargins(), g.redraw(c), g.oldChartHeight = null, $a(g, "resize"), Q === !1 ? f() : setTimeout(f, Q && Q.duration || 500)
			},
			setChartSize: function(a) {
				var b, c, d, e, f = this.inverted,
					g = this.renderer,
					h = this.chartWidth,
					i = this.chartHeight,
					j = this.options.chart,
					k = this.spacing,
					l = this.clipOffset;
				this.plotLeft = b = ka(this.plotLeft), this.plotTop = c = ka(this.plotTop), this.plotWidth = d = na(0, ka(h - b - this.marginRight)), this.plotHeight = e = na(0, ka(i - c - this.marginBottom)), this.plotSizeX = f ? e : d, this.plotSizeY = f ? d : e, this.plotBorderWidth = j.plotBorderWidth || 0, this.spacingBox = g.spacingBox = {
					x: k[3],
					y: k[0],
					width: h - k[3] - k[1],
					height: i - k[0] - k[2]
				}, this.plotBox = g.plotBox = {
					x: b,
					y: c,
					width: d,
					height: e
				}, h = 2 * la(this.plotBorderWidth / 2), f = ma(na(h, l[3]) / 2), g = ma(na(h, l[0]) / 2), this.clipBox = {
					x: f,
					y: g,
					width: la(this.plotSizeX - na(h, l[1]) / 2 - f),
					height: na(0, la(this.plotSizeY - na(h, l[2]) / 2 - g))
				}, a || Ua(this.axes, function(a) {
					a.setAxisSize(), a.setAxisTranslation()
				})
			},
			resetMargins: function() {
				var a = this.spacing,
					b = this.margin;
				this.plotTop = n(b[0], a[0]), this.marginRight = n(b[1], a[1]), this.marginBottom = n(b[2], a[2]), this.plotLeft = n(b[3], a[3]), this.axisOffset = [0, 0, 0, 0], this.clipOffset = [0, 0, 0, 0]
			},
			drawChartBox: function() {
				var a, b = this.options.chart,
					c = this.renderer,
					d = this.chartWidth,
					e = this.chartHeight,
					f = this.chartBackground,
					g = this.plotBackground,
					h = this.plotBorder,
					i = this.plotBGImage,
					j = b.borderWidth || 0,
					k = b.backgroundColor,
					l = b.plotBackgroundColor,
					m = b.plotBackgroundImage,
					n = b.plotBorderWidth || 0,
					o = this.plotLeft,
					p = this.plotTop,
					q = this.plotWidth,
					r = this.plotHeight,
					s = this.plotBox,
					t = this.clipRect,
					u = this.clipBox;
				a = j + (b.shadow ? 8 : 0), (j || k) && (f ? f.animate(f.crisp({
					width: d - a,
					height: e - a
				})) : (f = {
					fill: k || La
				}, j && (f.stroke = b.borderColor, f["stroke-width"] = j), this.chartBackground = c.rect(a / 2, a / 2, d - a, e - a, b.borderRadius, j).attr(f).addClass("highcharts-background").add().shadow(b.shadow))), l && (g ? g.animate(s) : this.plotBackground = c.rect(o, p, q, r, 0).attr({
					fill: l
				}).add().shadow(b.plotShadow)), m && (i ? i.animate(s) : this.plotBGImage = c.image(m, o, p, q, r).add()), t ? t.animate({
					width: u.width,
					height: u.height
				}) : this.clipRect = c.clipRect(u), n && (h ? h.animate(h.crisp({
					x: o,
					y: p,
					width: q,
					height: r,
					strokeWidth: -n
				})) : this.plotBorder = c.rect(o, p, q, r, 0, -n).attr({
					stroke: b.plotBorderColor,
					"stroke-width": n,
					fill: La,
					zIndex: 1
				}).add()), this.isDirtyBox = !1
			},
			propFromSeries: function() {
				var a, b, c, d = this,
					e = d.options.chart,
					f = d.options.series;
				Ua(["inverted", "angular", "polar"], function(g) {
					for (a = Oa[e.type || e.defaultSeriesType], c = d[g] || e[g] || a && a.prototype[g], b = f && f.length; !c && b--;)(a = Oa[f[b].type]) && a.prototype[g] && (c = !0);
					d[g] = c
				})
			},
			linkSeries: function() {
				var a = this,
					b = a.series;
				Ua(b, function(a) {
					a.linkedSeries.length = 0
				}), Ua(b, function(b) {
					var c = b.options.linkedTo;
					d(c) && (c = ":previous" === c ? a.series[b.index - 1] : a.get(c)) && (c.linkedSeries.push(b), b.linkedParent = c)
				})
			},
			renderSeries: function() {
				Ua(this.series, function(a) {
					a.translate(), a.setTooltipPoints && a.setTooltipPoints(), a.render()
				})
			},
			renderLabels: function() {
				var b = this,
					d = b.options.labels;
				d.items && Ua(d.items, function(e) {
					var f = a(d.style, e.style),
						g = c(f.left) + b.plotLeft,
						h = c(f.top) + b.plotTop + 12;
					delete f.left, delete f.top, b.renderer.text(e.html, g, h).attr({
						zIndex: 2
					}).css(f).add()
				})
			},
			render: function() {
				var a = this.axes,
					b = this.renderer,
					c = this.options;
				this.setTitle(), this.legend = new sb(this, c.legend), this.getStacks(), Ua(a, function(a) {
					a.setScale()
				}), this.getMargins(), this.maxTicks = null, Ua(a, function(a) {
					a.setTickPositions(!0), a.setMaxTicks()
				}), this.adjustTickAmounts(), this.getMargins(), this.drawChartBox(), this.hasCartesianSeries && Ua(a, function(a) {
					a.render()
				}), this.seriesGroup || (this.seriesGroup = b.g("series-group").attr({
					zIndex: 3
				}).add()), this.renderSeries(), this.renderLabels(), this.showCredits(c.credits), this.hasRendered = !0
			},
			showCredits: function(a) {
				a.enabled && !this.credits && (this.credits = this.renderer.text(a.text, 0, 0).on("click", function() {
					a.href && (location.href = a.href)
				}).attr({
					align: a.position.align,
					zIndex: 8
				}).css(a.style).add().align(a.position))
			},
			destroy: function() {
				var a, b = this,
					c = b.axes,
					d = b.series,
					e = b.container,
					f = e && e.parentNode;
				for ($a(b, "destroy"), Ia[b.index] = K, Ja--, b.renderTo.removeAttribute("data-highcharts-chart"), Za(b), a = c.length; a--;) c[a] = c[a].destroy();
				for (a = d.length; a--;) d[a] = d[a].destroy();
				Ua("title,subtitle,chartBackground,plotBackground,plotBGImage,plotBorder,seriesGroup,clipRect,credits,pointer,scroller,rangeSelector,legend,resetZoomButton,tooltip,renderer".split(","), function(a) {
					var c = b[a];
					c && c.destroy && (b[a] = c.destroy())
				}), e && (e.innerHTML = "", Za(e), f && B(e));
				for (a in b) delete b[a]
			},
			isReadyToRender: function() {
				var a = this;
				return !Ca && ia == ia.top && "complete" !== ha.readyState || Ea && !ia.canvg ? (Ea ? kb.push(function() {
					a.firstRender()
				}, a.options.global.canvasToolsURL) : ha.attachEvent("onreadystatechange", function() {
					ha.detachEvent("onreadystatechange", a.firstRender), "complete" === ha.readyState && a.firstRender()
				}), !1) : !0
			},
			firstRender: function() {
				var a = this,
					b = a.options,
					c = a.callback;
				a.isReadyToRender() && (a.getContainer(), $a(a, "init"), a.resetMargins(), a.setChartSize(), a.propFromSeries(), a.getAxes(), Ua(b.series || [], function(b) {
					a.initSeries(b)
				}), a.linkSeries(), $a(a, "beforeRender"), ga.Pointer && (a.pointer = new nb(a, b)), a.render(), a.renderer.draw(), c && c.apply(a, [a]), Ua(a.callbacks, function(b) {
					b.apply(a, [a])
				}), a.cloneRenderTo(!0), $a(a, "load"))
			},
			splashArray: function(a, b) {
				var c = b[a],
					c = e(c) ? c : [c, c, c, c];
				return [n(b[a + "Top"], c[0]), n(b[a + "Right"], c[1]), n(b[a + "Bottom"], c[2]), n(b[a + "Left"], c[3])]
			}
		}, I.prototype.callbacks = [], ib = ga.CenteredSeriesMixin = {
			getCenter: function() {
				var a, b, d = this.options,
					e = this.chart,
					f = 2 * (d.slicedOffset || 0),
					g = e.plotWidth - 2 * f,
					h = e.plotHeight - 2 * f,
					e = d.center,
					d = [n(e[0], "50%"), n(e[1], "50%"), d.size || "100%", d.innerSize || 0],
					i = oa(g, h);
				return Xa(d, function(d, e) {
					return b = /%$/.test(d), a = 2 > e || 2 === e && b, (b ? [g, h, i, i][e] * c(d) / 100 : d) + (a ? f : 0)
				})
			}
		};
		var tb = function() {};
		tb.prototype = {
			init: function(a, b, c) {
				return this.series = a, this.applyOptions(b, c), this.pointAttr = {}, a.options.colorByPoint && (b = a.options.colors || a.chart.options.colors, this.color = this.color || b[a.colorCounter++], a.colorCounter === b.length) && (a.colorCounter = 0), a.chart.pointCount++, this
			},
			applyOptions: function(b, c) {
				var d = this.series,
					e = d.options.pointValKey || d.pointValKey,
					b = tb.prototype.optionsToObject.call(this, b);
				return a(this, b), this.options = this.options ? a(this.options, b) : b, e && (this.y = this[e]), this.x === K && d && (this.x = c === K ? d.autoIncrement() : c), this
			},
			optionsToObject: function(a) {
				var b = {},
					c = this.series,
					d = c.pointArrayMap || ["y"],
					e = d.length,
					g = 0,
					h = 0;
				if ("number" == typeof a || null === a) b[d[0]] = a;
				else if (f(a)) for (a.length > e && (c = typeof a[0], "string" === c ? b.name = a[0] : "number" === c && (b.x = a[0]), g++); e > h;) b[d[h++]] = a[g++];
				else "object" == typeof a && (b = a, a.dataLabels && (c._hasPointLabels = !0), a.marker && (c._hasPointMarkers = !0));
				return b
			},
			destroy: function() {
				var a, b = this.series.chart,
					c = b.hoverPoints;
				b.pointCount--, c && (this.setState(), j(c, this), !c.length) && (b.hoverPoints = null), this === b.hoverPoint && this.onMouseOut(), (this.graphic || this.dataLabel) && (Za(this), this.destroyElements()), this.legendItem && b.legend.destroyItem(this);
				for (a in this) this[a] = null
			},
			destroyElements: function() {
				for (var a, b = "graphic,dataLabel,dataLabelUpper,group,connector,shadowGroup".split(","), c = 6; c--;) a = b[c], this[a] && (this[a] = this[a].destroy())
			},
			getLabelConfig: function() {
				return {
					x: this.category,
					y: this.y,
					key: this.name || this.category,
					series: this.series,
					point: this,
					percentage: this.percentage,
					total: this.total || this.stackTotal
				}
			},
			tooltipFormatter: function(a) {
				var b = this.series,
					c = b.tooltipOptions,
					d = n(c.valueDecimals, ""),
					e = c.valuePrefix || "",
					f = c.valueSuffix || "";
				return Ua(b.pointArrayMap || ["y"], function(b) {
					b = "{point." + b, (e || f) && (a = a.replace(b + "}", e + b + "}" + f)), a = a.replace(b + "}", b + ":,." + d + "f}")
				}), u(a, {
					point: this,
					series: this.series
				})
			},
			firePointEvent: function(a, b, c) {
				var d = this,
					e = this.series.options;
				(e.point.events[a] || d.options && d.options.events && d.options.events[a]) && this.importEvents(), "click" === a && e.allowPointSelect && (c = function(a) {
					d.select(null, a.ctrlKey || a.metaKey || a.shiftKey)
				}), $a(this, a, b, c)
			}
		};
		var ub = function() {};
		ub.prototype = {
			isCartesian: !0,
			type: "line",
			pointClass: tb,
			sorted: !0,
			requireSorting: !0,
			pointAttrToOptions: {
				stroke: "lineColor",
				"stroke-width": "lineWidth",
				fill: "fillColor",
				r: "radius"
			},
			axisTypes: ["xAxis", "yAxis"],
			colorCounter: 0,
			parallelArrays: ["x", "y"],
			init: function(b, c) {
				var d, e, f = this,
					g = b.series,
					h = function(a, b) {
						return n(a.options.index, a._i) - n(b.options.index, b._i)
					};
				f.chart = b, f.options = c = f.setOptions(c), f.linkedSeries = [], f.bindAxes(), a(f, {
					name: c.name,
					state: "",
					pointAttr: {},
					visible: c.visible !== !1,
					selected: c.selected === !0
				}), Ea && (c.animation = !1), e = c.events;
				for (d in e) Ya(f, d, e[d]);
				(e && e.click || c.point && c.point.events && c.point.events.click || c.allowPointSelect) && (b.runTrackerClick = !0), f.getColor(), f.getSymbol(), Ua(f.parallelArrays, function(a) {
					f[a + "Data"] = []
				}), f.setData(c.data, !1), f.isCartesian && (b.hasCartesianSeries = !0), g.push(f), f._i = g.length - 1, x(g, h), this.yAxis && x(this.yAxis.series, h), Ua(g, function(a, b) {
					a.index = b, a.name = a.name || "Series " + (b + 1)
				})
			},
			bindAxes: function() {
				var a, b = this,
					c = b.options,
					d = b.chart;
				Ua(b.axisTypes || [], function(e) {
					Ua(d[e], function(d) {
						a = d.options, (c[e] === a.index || c[e] !== K && c[e] === a.id || c[e] === K && 0 === a.index) && (d.series.push(b), b[e] = d, d.isDirty = !0)
					}), !b[e] && b.optionalAxis !== e && T(18, !0)
				})
			},
			updateParallelArrays: function(a, b) {
				var c = a.series,
					d = arguments;
				Ua(c.parallelArrays, "number" == typeof b ?
				function(d) {
					var e = "y" === d && c.toYData ? c.toYData(a) : a[d];
					c[d + "Data"][b] = e
				} : function(a) {
					Array.prototype[b].apply(c[a + "Data"], Array.prototype.slice.call(d, 2))
				})
			},
			autoIncrement: function() {
				var a = this.options,
					b = this.xIncrement,
					b = n(b, a.pointStart, 0);
				return this.pointInterval = n(this.pointInterval, a.pointInterval, 1), this.xIncrement = b + this.pointInterval, b
			},
			getSegments: function() {
				var a, b = -1,
					c = [],
					d = this.points,
					e = d.length;
				if (e) if (this.options.connectNulls) {
					for (a = e; a--;) null === d[a].y && d.splice(a, 1);
					d.length && (c = [d])
				} else Ua(d, function(a, f) {
					null === a.y ? (f > b + 1 && c.push(d.slice(b + 1, f)), b = f) : f === e - 1 && c.push(d.slice(b + 1, f + 1))
				});
				this.segments = c
			},
			setOptions: function(a) {
				var c = this.chart,
					d = c.options.plotOptions,
					c = c.userOptions || {},
					e = c.plotOptions || {},
					f = d[this.type];
				return this.userOptions = a, d = b(f, d.series, a), this.tooltipOptions = b(O.tooltip, O.plotOptions[this.type].tooltip, c.tooltip, e.series && e.series.tooltip, e[this.type] && e[this.type].tooltip, a.tooltip), null === f.marker && delete d.marker, d
			},
			getCyclic: function(a, b, c) {
				var d = this.userOptions,
					e = "_" + a + "Index",
					f = a + "Counter";
				b || (k(d[e]) ? b = d[e] : (d[e] = b = this.chart[f] % c.length, this.chart[f] += 1), b = c[b]), this[a] = b
			},
			getColor: function() {
				this.options.colorByPoint || this.getCyclic("color", this.options.color || cb[this.type].color, this.chart.options.colors)
			},
			getSymbol: function() {
				var a = this.options.marker;
				this.getCyclic("symbol", a.symbol, this.chart.options.symbols), /^url/.test(this.symbol) && (a.radius = 0)
			},
			drawLegendSymbol: Qa.drawLineMarker,
			setData: function(a, b, c, e) {
				var h, i = this,
					j = i.points,
					k = j && j.length || 0,
					l = i.options,
					m = i.chart,
					o = null,
					p = i.xAxis,
					q = p && !! p.categories,
					r = i.tooltipPoints,
					s = l.turboThreshold,
					t = this.xData,
					u = this.yData,
					v = (h = i.pointArrayMap) && h.length,
					a = a || [];
				if (h = a.length, b = n(b, !0), e === !1 || !h || k !== h || i.cropped || i.hasGroupedData) {
					if (i.xIncrement = null, i.pointRange = q ? 1 : l.pointRange, i.colorCounter = 0, Ua(this.parallelArrays, function(a) {
						i[a + "Data"].length = 0
					}), s && h > s) {
						for (c = 0; null === o && h > c;) o = a[c], c++;
						if (g(o)) {
							for (q = n(l.pointStart, 0), l = n(l.pointInterval, 1), c = 0; h > c; c++) t[c] = q, u[c] = a[c], q += l;
							i.xIncrement = q
						} else if (f(o)) if (v) for (c = 0; h > c; c++) l = a[c], t[c] = l[0], u[c] = l.slice(1, v + 1);
						else for (c = 0; h > c; c++) l = a[c], t[c] = l[0], u[c] = l[1];
						else T(12)
					} else for (c = 0; h > c; c++) a[c] !== K && (l = {
						series: i
					}, i.pointClass.prototype.applyOptions.apply(l, [a[c]]), i.updateParallelArrays(l, c), q && l.name) && (p.names[l.x] = l.name);
					for (d(u[0]) && T(14, !0), i.data = [], i.options.data = a, c = k; c--;) j[c] && j[c].destroy && j[c].destroy();
					r && (r.length = 0), p && (p.minRange = p.userMinRange), i.isDirty = i.isDirtyData = m.isDirtyBox = !0, c = !1
				} else Ua(a, function(a, b) {
					j[b].update(a, !1, null, !1)
				});
				b && m.redraw(c)
			},
			processData: function(a) {
				var b, c = this.xData,
					d = this.yData,
					e = c.length;
				b = 0;
				var f, g, h, i = this.xAxis,
					j = this.options;
				h = j.cropThreshold;
				var k, l, m = 0,
					n = this.isCartesian;
				if (n && !this.isDirty && !i.isDirty && !this.yAxis.isDirty && !a) return !1;
				for (i && (k = i.getExtremes(), l = k.min, k = k.max), n && this.sorted && (!h || e > h || this.forceCrop) && (c[e - 1] < l || c[0] > k ? (c = [], d = []) : (c[0] < l || c[e - 1] > k) && (b = this.cropData(this.xData, this.yData, l, k), c = b.xData, d = b.yData, b = b.start, f = !0, m = c.length)), h = c.length - 1; h >= 0; h--) e = c[h] - c[h - 1], !f && c[h] > l && c[h] < k && m++, e > 0 && (g === K || g > e) ? g = e : 0 > e && this.requireSorting && T(15);
				this.cropped = f, this.cropStart = b, this.processedXData = c, this.processedYData = d, this.activePointCount = m, null === j.pointRange && (this.pointRange = g || 1), this.closestPointRange = g
			},
			cropData: function(a, b, c, d) {
				var e, f = a.length,
					g = 0,
					h = f,
					i = n(this.cropShoulder, 1);
				for (e = 0; f > e; e++) if (a[e] >= c) {
					g = na(0, e - i);
					break
				}
				for (; f > e; e++) if (a[e] > d) {
					h = e + i;
					break
				}
				return {
					xData: a.slice(g, h),
					yData: b.slice(g, h),
					start: g,
					end: h
				}
			},
			generatePoints: function() {
				var a, b, c, d, e = this.options.data,
					f = this.data,
					g = this.processedXData,
					h = this.processedYData,
					i = this.pointClass,
					j = g.length,
					k = this.cropStart || 0,
					l = this.hasGroupedData,
					n = [];
				for (f || l || (f = [], f.length = e.length, f = this.data = f), d = 0; j > d; d++) b = k + d, l ? n[d] = (new i).init(this, [g[d]].concat(m(h[d]))) : (f[b] ? c = f[b] : e[b] !== K && (f[b] = c = (new i).init(this, e[b], g[d])), n[d] = c), n[d].index = b;
				if (f && (j !== (a = f.length) || l)) for (d = 0; a > d; d++) d === k && !l && (d += j), f[d] && (f[d].destroyElements(), f[d].plotX = K);
				this.data = f, this.points = n
			},
			getExtremes: function(a) {
				var b, c = this.yAxis,
					d = this.processedXData,
					e = [],
					f = 0;
				b = this.xAxis.getExtremes();
				var g, h, i, j, k = b.min,
					l = b.max,
					a = a || this.stackedYData || this.processedYData;
				for (b = a.length, j = 0; b > j; j++) if (h = d[j], i = a[j], g = null !== i && i !== K && (!c.isLog || i.length || i > 0), h = this.getExtremesFromAll || this.cropped || (d[j + 1] || h) >= k && (d[j - 1] || h) <= l, g && h) if (g = i.length) for (; g--;) null !== i[g] && (e[f++] = i[g]);
				else e[f++] = i;
				this.dataMin = n(void 0, y(e)), this.dataMax = n(void 0, z(e))
			},
			translate: function() {
				this.processedXData || this.processData(), this.generatePoints();
				for (var a = this.options, b = a.stacking, c = this.xAxis, d = c.categories, e = this.yAxis, f = this.points, h = f.length, i = !! this.modifyValue, j = a.pointPlacement, l = "between" === j || g(j), m = a.threshold, a = 0; h > a; a++) {
					var o = f[a],
						p = o.x,
						q = o.y,
						r = o.low,
						s = b && e.stacks[(this.negStacks && m > q ? "-" : "") + this.stackKey];
					e.isLog && 0 >= q && (o.y = q = null, T(10)), o.plotX = c.translate(p, 0, 0, 0, 1, j, "flags" === this.type), b && this.visible && s && s[p] && (s = s[p], q = s.points[this.index + "," + a], r = q[0], q = q[1], 0 === r && (r = n(m, e.min)), e.isLog && 0 >= r && (r = null), o.total = o.stackTotal = s.total, o.percentage = s.total && o.y / s.total * 100, o.stackY = q, s.setOffset(this.pointXOffset || 0, this.barW || 0)), o.yBottom = k(r) ? e.translate(r, 0, 1, 0, 1) : null, i && (q = this.modifyValue(q, o)), o.plotY = "number" == typeof q && q !== 1 / 0 ? e.translate(q, 0, 1, 0, 1) : K, o.clientX = l ? c.translate(p, 0, 0, 0, 1) : o.plotX, o.negative = o.y < (m || 0), o.category = d && d[o.x] !== K ? d[o.x] : o.x
				}
				this.getSegments()
			},
			animate: function(b) {
				var c, d = this.chart,
					f = d.renderer;
				c = this.options.animation;
				var g, h = this.clipBox || d.clipBox,
					i = d.inverted;
				c && !e(c) && (c = cb[this.type].animation), g = ["_sharedClip", c.duration, c.easing, h.height].join(","), b ? (b = d[g], c = d[g + "m"], b || (d[g] = b = f.clipRect(a(h, {
					width: 0
				})), d[g + "m"] = c = f.clipRect(-99, i ? -d.plotLeft : -d.plotTop, 99, i ? d.chartWidth : d.chartHeight)), this.group.clip(b), this.markerGroup.clip(c), this.sharedClipKey = g) : ((b = d[g]) && b.animate({
					width: d.plotSizeX
				}, c), d[g + "m"] && d[g + "m"].animate({
					width: d.plotSizeX + 99
				}, c), this.animate = null)
			},
			afterAnimate: function() {
				var a = this.chart,
					b = this.sharedClipKey,
					c = this.group,
					d = this.clipBox;
				c && this.options.clip !== !1 && (b && d || c.clip(d ? a.renderer.clipRect(d) : a.clipRect), this.markerGroup.clip()), $a(this, "afterAnimate"), setTimeout(function() {
					b && a[b] && (d || (a[b] = a[b].destroy()), a[b + "m"] && (a[b + "m"] = a[b + "m"].destroy()))
				}, 100)
			},
			drawPoints: function() {
				var b, c, d, e, f, g, h, i, j, k, l, m, o = this.points,
					p = this.chart,
					q = this.options.marker,
					r = this.pointAttr[""],
					s = this.markerGroup,
					t = n(q.enabled, !this.requireSorting || this.activePointCount < .5 * this.xAxis.len / q.radius);
				if (q.enabled !== !1 || this._hasPointMarkers) for (e = o.length; e--;) f = o[e], c = la(f.plotX), d = f.plotY, j = f.graphic, k = f.marker || {}, l = !! f.marker, b = t && k.enabled === K || k.enabled, m = p.isInsidePlot(ka(c), d, p.inverted), b && d !== K && !isNaN(d) && null !== f.y ? (b = f.pointAttr[f.selected ? "select" : ""] || r, g = b.r, h = n(k.symbol, this.symbol), i = 0 === h.indexOf("url"), j ? j[m ? "show" : "hide"](!0).animate(a({
					x: c - g,
					y: d - g
				}, j.symbolName ? {
					width: 2 * g,
					height: 2 * g
				} : {})) : m && (g > 0 || i) && (f.graphic = p.renderer.symbol(h, c - g, d - g, 2 * g, 2 * g, l ? k : q).attr(b).add(s))) : j && (f.graphic = j.destroy())
			},
			convertAttribs: function(a, b, c, d) {
				var e, f, g = this.pointAttrToOptions,
					h = {},
					a = a || {},
					b = b || {},
					c = c || {},
					d = d || {};
				for (e in g) f = g[e], h[e] = n(a[f], b[e], c[e], d[e]);
				return h
			},
			getAttribs: function() {
				var b, c = this,
					d = c.options,
					e = cb[c.type].marker ? d.marker : d,
					f = e.states,
					g = f.hover,
					h = c.color;
				b = {
					stroke: h,
					fill: h
				};
				var i, j, l = c.points || [],
					m = [],
					n = c.pointAttrToOptions;
				j = c.hasPointSpecificOptions;
				var o = d.negativeColor,
					p = e.lineColor,
					q = e.fillColor;
				i = d.turboThreshold;
				var r;
				if (d.marker ? (g.radius = g.radius || e.radius + g.radiusPlus, g.lineWidth = g.lineWidth || e.lineWidth + g.lineWidthPlus) : g.color = g.color || gb(g.color || h).brighten(g.brightness).get(), m[""] = c.convertAttribs(e, b), Ua(["hover", "select"], function(a) {
					m[a] = c.convertAttribs(f[a], m[""])
				}), c.pointAttr = m, h = l.length, !i || i > h || j) for (; h--;) {
					if (i = l[h], (e = i.options && i.options.marker || i.options) && e.enabled === !1 && (e.radius = 0), i.negative && o && (i.color = i.fillColor = o), j = d.colorByPoint || i.color, i.options) for (r in n) k(e[n[r]]) && (j = !0);
					j ? (e = e || {}, j = [], f = e.states || {}, b = f.hover = f.hover || {}, d.marker || (b.color = b.color || !i.options.color && g.color || gb(i.color).brighten(b.brightness || g.brightness).get()), b = {
						color: i.color
					}, q || (b.fillColor = i.color), p || (b.lineColor = i.color), j[""] = c.convertAttribs(a(b, e), m[""]), j.hover = c.convertAttribs(f.hover, m.hover, j[""]), j.select = c.convertAttribs(f.select, m.select, j[""])) : j = m, i.pointAttr = j
				}
			},
			destroy: function() {
				var a, b, c, d, e, f = this,
					g = f.chart,
					h = /AppleWebKit\/533/.test(ua),
					i = f.data || [];
				for ($a(f, "destroy"), Za(f), Ua(f.axisTypes || [], function(a) {
					(e = f[a]) && (j(e.series, f), e.isDirty = e.forceRedraw = !0)
				}), f.legendItem && f.chart.legend.destroyItem(f), b = i.length; b--;)(c = i[b]) && c.destroy && c.destroy();
				f.points = null, clearTimeout(f.animationTimeout), Ua("area,graph,dataLabelsGroup,group,markerGroup,tracker,graphNeg,areaNeg,posClip,negClip".split(","), function(b) {
					f[b] && (a = h && "group" === b ? "hide" : "destroy", f[b][a]())
				}), g.hoverSeries === f && (g.hoverSeries = null), j(g.series, f);
				for (d in f) delete f[d]
			},
			getSegmentPath: function(a) {
				var b = this,
					c = [],
					d = b.options.step;
				return Ua(a, function(e, f) {
					var g, h = e.plotX,
						i = e.plotY;
					b.getPointSpline ? c.push.apply(c, b.getPointSpline(a, e, f)) : (c.push(f ? "L" : "M"), d && f && (g = a[f - 1], "right" === d ? c.push(g.plotX, i) : "center" === d ? c.push((g.plotX + h) / 2, g.plotY, (g.plotX + h) / 2, i) : c.push(h, g.plotY)), c.push(e.plotX, e.plotY))
				}), c
			},
			getGraphPath: function() {
				var a, b = this,
					c = [],
					d = [];
				return Ua(b.segments, function(e) {
					a = b.getSegmentPath(e), e.length > 1 ? c = c.concat(a) : d.push(e[0])
				}), b.singlePoints = d, b.graphPath = c
			},
			drawGraph: function() {
				var a = this,
					b = this.options,
					c = [
						["graph", b.lineColor || this.color]
					],
					d = b.lineWidth,
					e = b.dashStyle,
					f = "square" !== b.linecap,
					g = this.getGraphPath(),
					h = b.negativeColor;
				h && c.push(["graphNeg", h]), Ua(c, function(c, h) {
					var i = c[0],
						j = a[i];
					j ? (bb(j), j.animate({
						d: g
					})) : d && g.length && (j = {
						stroke: c[1],
						"stroke-width": d,
						fill: La,
						zIndex: 1
					}, e ? j.dashstyle = e : f && (j["stroke-linecap"] = j["stroke-linejoin"] = "round"), a[i] = a.chart.renderer.path(g).attr(j).add(a.group).shadow(!h && b.shadow))
				})
			},
			clipNeg: function() {
				var a, b = this.options,
					c = this.chart,
					d = c.renderer,
					e = b.negativeColor || b.negativeFillColor,
					f = this.graph,
					g = this.area,
					h = this.posClip,
					i = this.negClip;
				a = c.chartWidth;
				var j = c.chartHeight,
					k = na(a, j),
					l = this.yAxis;
				e && (f || g) && (e = ka(l.toPixels(b.threshold || 0, !0)), 0 > e && (k -= e), b = {
					x: 0,
					y: 0,
					width: k,
					height: e
				}, k = {
					x: 0,
					y: e,
					width: k,
					height: k
				}, c.inverted && (b.height = k.y = c.plotWidth - e, d.isVML && (b = {
					x: c.plotWidth - e - c.plotLeft,
					y: 0,
					width: a,
					height: j
				}, k = {
					x: e + c.plotLeft - a,
					y: 0,
					width: c.plotLeft + e,
					height: a
				})), l.reversed ? (c = k, a = b) : (c = b, a = k), h ? (h.animate(c), i.animate(a)) : (this.posClip = h = d.clipRect(c), this.negClip = i = d.clipRect(a), f && this.graphNeg && (f.clip(h), this.graphNeg.clip(i)), g && (g.clip(h), this.areaNeg.clip(i))))
			},
			invertGroups: function() {
				function a() {
					var a = {
						width: b.yAxis.len,
						height: b.xAxis.len
					};
					Ua(["group", "markerGroup"], function(c) {
						b[c] && b[c].attr(a).invert()
					})
				}
				var b = this,
					c = b.chart;
				b.xAxis && (Ya(c, "resize", a), Ya(b, "destroy", function() {
					Za(c, "resize", a)
				}), a(), b.invertGroups = a)
			},
			plotGroup: function(a, b, c, d, e) {
				var f = this[a],
					g = !f;
				return g && (this[a] = f = this.chart.renderer.g(b).attr({
					visibility: c,
					zIndex: d || .1
				}).add(e)), f[g ? "attr" : "animate"](this.getPlotBox()), f
			},
			getPlotBox: function() {
				var a = this.chart,
					b = this.xAxis,
					c = this.yAxis;
				return a.inverted && (b = c, c = this.xAxis), {
					translateX: b ? b.left : a.plotLeft,
					translateY: c ? c.top : a.plotTop,
					scaleX: 1,
					scaleY: 1
				}
			},
			render: function() {
				var a, b = this,
					c = b.chart,
					d = b.options,
					e = (a = d.animation) && !! b.animate && c.renderer.isSVG && n(a.duration, 500) || 0,
					f = b.visible ? "visible" : "hidden",
					g = d.zIndex,
					h = b.hasRendered,
					i = c.seriesGroup;
				a = b.plotGroup("group", "series", f, g, i), b.markerGroup = b.plotGroup("markerGroup", "markers", f, g, i), e && b.animate(!0), b.getAttribs(), a.inverted = b.isCartesian ? c.inverted : !1, b.drawGraph && (b.drawGraph(), b.clipNeg()), Ua(b.points, function(a) {
					a.redraw && a.redraw()
				}), b.drawDataLabels && b.drawDataLabels(), b.visible && b.drawPoints(), b.drawTracker && b.options.enableMouseTracking !== !1 && b.drawTracker(), c.inverted && b.invertGroups(), d.clip !== !1 && !b.sharedClipKey && !h && a.clip(c.clipRect), e && b.animate(), h || (e ? b.animationTimeout = setTimeout(function() {
					b.afterAnimate()
				}, e) : b.afterAnimate()), b.isDirty = b.isDirtyData = !1, b.hasRendered = !0
			},
			redraw: function() {
				var a = this.chart,
					b = this.isDirtyData,
					c = this.group,
					d = this.xAxis,
					e = this.yAxis;
				c && (a.inverted && c.attr({
					width: a.plotWidth,
					height: a.plotHeight
				}), c.animate({
					translateX: n(d && d.left, a.plotLeft),
					translateY: n(e && e.top, a.plotTop)
				})), this.translate(), this.setTooltipPoints && this.setTooltipPoints(!0), this.render(), b && $a(this, "updatedData")
			}
		}, J.prototype = {
			destroy: function() {
				A(this, this.axis)
			},
			render: function(a) {
				var b = this.options,
					c = b.format,
					c = c ? u(c, this) : b.formatter.call(this);
				this.label ? this.label.attr({
					text: c,
					visibility: "hidden"
				}) : this.label = this.axis.chart.renderer.text(c, null, null, b.useHTML).css(b.style).attr({
					align: this.textAlign,
					rotation: b.rotation,
					visibility: "hidden"
				}).add(a)
			},
			setOffset: function(a, b) {
				var c = this.axis,
					d = c.chart,
					e = d.inverted,
					f = this.isNegative,
					g = c.translate(c.usePercentage ? 100 : this.total, 0, 0, 0, 1),
					c = c.translate(0),
					c = pa(g - c),
					h = d.xAxis[0].translate(this.x) + a,
					i = d.plotHeight,
					f = {
						x: e ? f ? g : g - c : h,
						y: e ? i - h - b : f ? i - g - c : i - g,
						width: e ? c : b,
						height: e ? b : c
					};
				(e = this.label) && (e.align(this.alignOptions, null, f), f = e.alignAttr, e[this.options.crop === !1 || d.isInsidePlot(f.x, f.y) ? "show" : "hide"](!0))
			}
		}, H.prototype.buildStacks = function() {
			var a = this.series,
				b = n(this.options.reversedStacks, !0),
				c = a.length;
			if (!this.isXAxis) {
				for (this.usePercentage = !1; c--;) a[b ? c : a.length - c - 1].setStackedPoints();
				if (this.usePercentage) for (c = 0; c < a.length; c++) a[c].setPercentStacks()
			}
		}, H.prototype.renderStackTotals = function() {
			var a, b, c = this.chart,
				d = c.renderer,
				e = this.stacks,
				f = this.stackTotalGroup;
			f || (this.stackTotalGroup = f = d.g("stack-labels").attr({
				visibility: "visible",
				zIndex: 6
			}).add()), f.translate(c.plotLeft, c.plotTop);
			for (a in e) for (b in c = e[a]) c[b].render(f)
		}, ub.prototype.setStackedPoints = function() {
			if (this.options.stacking && (this.visible === !0 || this.chart.options.chart.ignoreHiddenSeries === !1)) {
				var a, b, c, d, e, f, g = this.processedXData,
					h = this.processedYData,
					i = [],
					j = h.length,
					k = this.options,
					l = k.threshold,
					m = k.stack,
					k = k.stacking,
					n = this.stackKey,
					o = "-" + n,
					p = this.negStacks,
					q = this.yAxis,
					r = q.stacks,
					s = q.oldStacks;
				for (d = 0; j > d; d++) e = g[d], f = h[d], c = this.index + "," + d, b = (a = p && l > f) ? o : n, r[b] || (r[b] = {}), r[b][e] || (s[b] && s[b][e] ? (r[b][e] = s[b][e], r[b][e].total = null) : r[b][e] = new J(q, q.options.stackLabels, a, e, m)), b = r[b][e], b.points[c] = [b.cum || 0], "percent" === k ? (a = a ? n : o, p && r[a] && r[a][e] ? (a = r[a][e], b.total = a.total = na(a.total, b.total) + pa(f) || 0) : b.total = C(b.total + (pa(f) || 0))) : b.total = C(b.total + (f || 0)), b.cum = (b.cum || 0) + (f || 0), b.points[c].push(b.cum), i[d] = b.cum;
				"percent" === k && (q.usePercentage = !0), this.stackedYData = i, q.oldStacks = {}
			}
		}, ub.prototype.setPercentStacks = function() {
			var a = this,
				b = a.stackKey,
				c = a.yAxis.stacks,
				d = a.processedXData;
			Ua([b, "-" + b], function(b) {
				for (var e, f, g, h = d.length; h--;) f = d[h], e = (g = c[b] && c[b][f]) && g.points[a.index + "," + h], (f = e) && (g = g.total ? 100 / g.total : 0, f[0] = C(f[0] * g), f[1] = C(f[1] * g), a.stackedYData[h] = f[1])
			})
		}, a(I.prototype, {
			addSeries: function(a, b, c) {
				var d, e = this;
				return a && (b = n(b, !0), $a(e, "addSeries", {
					options: a
				}, function() {
					d = e.initSeries(a), e.isDirtyLegend = !0, e.linkSeries(), b && e.redraw(c)
				})), d
			},
			addAxis: function(a, c, d, e) {
				var f = c ? "xAxis" : "yAxis",
					g = this.options;
				new H(this, b(a, {
					index: this[f].length,
					isX: c
				})), g[f] = m(g[f] || {}), g[f].push(a), n(d, !0) && this.redraw(e)
			},
			showLoading: function(b) {
				var c = this,
					d = c.options,
					e = c.loadingDiv,
					f = d.loading,
					g = function() {
						e && o(e, {
							left: c.plotLeft + "px",
							top: c.plotTop + "px",
							width: c.plotWidth + "px",
							height: c.plotHeight + "px"
						})
					};
				e || (c.loadingDiv = e = p(Ka, {
					className: "highcharts-loading"
				}, a(f.style, {
					zIndex: 10,
					display: La
				}), c.container), c.loadingSpan = p("span", null, f.labelStyle, e), Ya(c, "redraw", g)), c.loadingSpan.innerHTML = b || d.lang.loading, c.loadingShown || (o(e, {
					opacity: 0,
					display: ""
				}), ab(e, {
					opacity: f.style.opacity
				}, {
					duration: f.showDuration || 0
				}), c.loadingShown = !0), g()
			},
			hideLoading: function() {
				var a = this.options,
					b = this.loadingDiv;
				b && ab(b, {
					opacity: 0
				}, {
					duration: a.loading.hideDuration || 100,
					complete: function() {
						o(b, {
							display: La
						})
					}
				}), this.loadingShown = !1
			}
		}), a(tb.prototype, {
			update: function(a, b, c, d) {
				function g() {
					i.applyOptions(a), e(a) && !f(a) && (i.redraw = function() {
						k && (a && a.marker && a.marker.symbol ? i.graphic = k.destroy() : k.attr(i.pointAttr[i.state || ""])), a && a.dataLabels && i.dataLabel && (i.dataLabel = i.dataLabel.destroy()), i.redraw = null
					}), h = i.index, j.updateParallelArrays(i, h), m.data[h] = i.options, j.isDirty = j.isDirtyData = !0, !j.fixedBox && j.hasCartesianSeries && (l.isDirtyBox = !0), "point" === m.legendType && l.legend.destroyItem(i), b && l.redraw(c)
				}
				var h, i = this,
					j = i.series,
					k = i.graphic,
					l = j.chart,
					m = j.options,
					b = n(b, !0);
				d === !1 ? g() : i.firePointEvent("update", {
					options: a
				}, g)
			},
			remove: function(a, b) {
				var c, d = this,
					e = d.series,
					f = e.points,
					g = e.chart,
					h = e.data;
				D(b, g), a = n(a, !0), d.firePointEvent("remove", null, function() {
					c = Ta(d, h), h.length === f.length && f.splice(c, 1), h.splice(c, 1), e.options.data.splice(c, 1), e.updateParallelArrays(d, "splice", c, 1), d.destroy(), e.isDirty = !0, e.isDirtyData = !0, a && g.redraw()
				})
			}
		}), a(ub.prototype, {
			addPoint: function(a, b, c, d) {
				var e, f = this.options,
					g = this.data,
					h = this.graph,
					i = this.area,
					j = this.chart,
					k = this.xAxis && this.xAxis.names,
					l = h && h.shift || 0,
					m = f.data,
					o = this.xData;
				if (D(d, j), c && Ua([h, i, this.graphNeg, this.areaNeg], function(a) {
					a && (a.shift = l + 1)
				}), i && (i.isArea = !0), b = n(b, !0), d = {
					series: this
				}, this.pointClass.prototype.applyOptions.apply(d, [a]), h = d.x, i = o.length, this.requireSorting && h < o[i - 1]) for (e = !0; i && o[i - 1] > h;) i--;
				this.updateParallelArrays(d, "splice", i, 0, 0), this.updateParallelArrays(d, i), k && d.name && (k[h] = d.name), m.splice(i, 0, a), e && (this.data.splice(i, 0, null), this.processData()), "point" === f.legendType && this.generatePoints(), c && (g[0] && g[0].remove ? g[0].remove(!1) : (g.shift(), this.updateParallelArrays(d, "shift"), m.shift())), this.isDirtyData = this.isDirty = !0, b && (this.getAttribs(), j.redraw())
			},
			remove: function(a, b) {
				var c = this,
					d = c.chart,
					a = n(a, !0);
				c.isRemoving || (c.isRemoving = !0, $a(c, "remove", null, function() {
					c.destroy(), d.isDirtyLegend = d.isDirtyBox = !0, d.linkSeries(), a && d.redraw(b)
				})), c.isRemoving = !1
			},
			update: function(c, d) {
				var e, f = this,
					g = this.chart,
					h = this.userOptions,
					i = this.type,
					j = Oa[i].prototype,
					k = ["group", "markerGroup", "dataLabelsGroup"];
				Ua(k, function(a) {
					k[a] = f[a], delete f[a]
				}), c = b(h, {
					animation: !1,
					index: this.index,
					pointStart: this.xData[0]
				}, {
					data: this.options.data
				}, c), this.remove(!1);
				for (e in j) j.hasOwnProperty(e) && (this[e] = K);
				a(this, Oa[c.type || i].prototype), Ua(k, function(a) {
					f[a] = k[a]
				}), this.init(g, c), g.linkSeries(), n(d, !0) && g.redraw(!1)
			}
		}), a(H.prototype, {
			update: function(c, d) {
				var e = this.chart,
					c = e.options[this.coll][this.options.index] = b(this.userOptions, c);
				this.destroy(!0), this._addedPlotLB = K, this.init(e, a(c, {
					events: K
				})), e.isDirtyBox = !0, n(d, !0) && e.redraw()
			},
			remove: function(a) {
				for (var b = this.chart, c = this.coll, d = this.series, e = d.length; e--;) d[e] && d[e].remove(!1);
				j(b.axes, this), j(b[c], this), b.options[c].splice(this.options.index, 1), Ua(b[c], function(a, b) {
					a.options.index = b
				}), this.destroy(), b.isDirtyBox = !0, n(a, !0) && b.redraw()
			},
			setTitle: function(a, b) {
				this.update({
					title: a
				}, b)
			},
			setCategories: function(a, b) {
				this.update({
					categories: a
				}, b)
			}
		}), jb = q(ub), Oa.line = jb, cb.area = b(Pa, {
			threshold: 0
		});
		var vb = q(ub, {
			type: "area",
			getSegments: function() {
				var a, b, c, d, e = this,
					f = [],
					g = [],
					h = [],
					i = this.xAxis,
					j = this.yAxis,
					k = j.stacks[this.stackKey],
					l = {},
					m = this.points,
					n = this.options.connectNulls;
				if (this.options.stacking && !this.cropped) {
					for (c = 0; c < m.length; c++) l[m[c].x] = m[c];
					for (d in k) null !== k[d].total && h.push(+d);
					h.sort(function(a, b) {
						return a - b
					}), Ua(h, function(d) {
						var f, h = 0;
						if (!n || l[d] && null !== l[d].y) if (l[d]) g.push(l[d]);
						else {
							for (c = e.index; c <= j.series.length; c++) if (f = k[d].points[c + "," + d]) {
								h = f[1];
								break
							}
							a = i.translate(d), b = j.toPixels(h, !0), g.push({
								y: null,
								plotX: a,
								clientX: a,
								plotY: b,
								yBottom: b,
								onMouseOver: Ha
							})
						}
					}), g.length && f.push(g)
				} else ub.prototype.getSegments.call(this), f = this.segments;
				this.segments = f
			},
			getSegmentPath: function(a) {
				var b, c = ub.prototype.getSegmentPath.call(this, a),
					d = [].concat(c),
					e = this.options;
				b = c.length;
				var f, g = this.yAxis.getThreshold(e.threshold);
				if (3 === b && d.push("L", c[1], c[2]), e.stacking && !this.closedStacks) for (b = a.length - 1; b >= 0; b--) f = n(a[b].yBottom, g), b < a.length - 1 && e.step && d.push(a[b + 1].plotX, f), d.push(a[b].plotX, f);
				else this.closeSegment(d, a, g);
				return this.areaPath = this.areaPath.concat(d), c
			},
			closeSegment: function(a, b, c) {
				a.push("L", b[b.length - 1].plotX, c, "L", b[0].plotX, c)
			},
			drawGraph: function() {
				this.areaPath = [], ub.prototype.drawGraph.apply(this);
				var a = this,
					b = this.areaPath,
					c = this.options,
					d = c.negativeColor,
					e = c.negativeFillColor,
					f = [
						["area", this.color, c.fillColor]
					];
				(d || e) && f.push(["areaNeg", d, e]), Ua(f, function(d) {
					var e = d[0],
						f = a[e];
					f ? f.animate({
						d: b
					}) : a[e] = a.chart.renderer.path(b).attr({
						fill: n(d[2], gb(d[1]).setOpacity(n(c.fillOpacity, .75)).get()),
						zIndex: 0
					}).add(a.group)
				})
			},
			drawLegendSymbol: Qa.drawRectangle
		});
		Oa.area = vb, cb.spline = b(Pa), jb = q(ub, {
			type: "spline",
			getPointSpline: function(a, b, c) {
				var d, e, f, g, h = b.plotX,
					i = b.plotY,
					j = a[c - 1],
					k = a[c + 1];
				if (j && k) {
					a = j.plotY, f = k.plotX;
					var l, k = k.plotY;
					d = (1.5 * h + j.plotX) / 2.5, e = (1.5 * i + a) / 2.5, f = (1.5 * h + f) / 2.5, g = (1.5 * i + k) / 2.5, l = (g - e) * (f - h) / (f - d) + i - g, e += l, g += l, e > a && e > i ? (e = na(a, i), g = 2 * i - e) : a > e && i > e && (e = oa(a, i), g = 2 * i - e), g > k && g > i ? (g = na(k, i), e = 2 * i - g) : k > g && i > g && (g = oa(k, i), e = 2 * i - g), b.rightContX = f, b.rightContY = g
				}
				return c ? (b = ["C", j.rightContX || j.plotX, j.rightContY || j.plotY, d || h, e || i, h, i], j.rightContX = j.rightContY = null) : b = ["M", h, i], b
			}
		}), Oa.spline = jb, cb.areaspline = b(cb.area), vb = vb.prototype, jb = q(jb, {
			type: "areaspline",
			closedStacks: !0,
			getSegmentPath: vb.getSegmentPath,
			closeSegment: vb.closeSegment,
			drawGraph: vb.drawGraph,
			drawLegendSymbol: Qa.drawRectangle
		}), Oa.areaspline = jb, cb.column = b(Pa, {
			borderColor: "#FFFFFF",
			borderRadius: 0,
			groupPadding: .2,
			marker: null,
			pointPadding: .1,
			minPointLength: 0,
			cropThreshold: 50,
			pointRange: null,
			states: {
				hover: {
					brightness: .1,
					shadow: !1,
					halo: !1
				},
				select: {
					color: "#C0C0C0",
					borderColor: "#000000",
					shadow: !1
				}
			},
			dataLabels: {
				align: null,
				verticalAlign: null,
				y: null
			},
			stickyTracking: !1,
			tooltip: {
				distance: 6
			},
			threshold: 0
		}), jb = q(ub, {
			type: "column",
			pointAttrToOptions: {
				stroke: "borderColor",
				fill: "color",
				r: "borderRadius"
			},
			cropShoulder: 0,
			trackerGroups: ["group", "dataLabelsGroup"],
			negStacks: !0,
			init: function() {
				ub.prototype.init.apply(this, arguments);
				var a = this,
					b = a.chart;
				b.hasRendered && Ua(b.series, function(b) {
					b.type === a.type && (b.isDirty = !0)
				})
			},
			getColumnMetrics: function() {
				var a, b, c = this,
					d = c.options,
					e = c.xAxis,
					f = c.yAxis,
					g = e.reversed,
					h = {},
					i = 0;
				d.grouping === !1 ? i = 1 : Ua(c.chart.series, function(d) {
					var e = d.options,
						g = d.yAxis;
					d.type === c.type && d.visible && f.len === g.len && f.pos === g.pos && (e.stacking ? (a = d.stackKey, h[a] === K && (h[a] = i++), b = h[a]) : e.grouping !== !1 && (b = i++), d.columnIndex = b)
				});
				var e = oa(pa(e.transA) * (e.ordinalSlope || d.pointRange || e.closestPointRange || e.tickInterval || 1), e.len),
					j = e * d.groupPadding,
					l = (e - 2 * j) / i,
					m = d.pointWidth,
					d = k(m) ? (l - m) / 2 : l * d.pointPadding,
					m = n(m, l - 2 * d);
				return c.columnMetrics = {
					width: m,
					offset: d + (j + ((g ? i - (c.columnIndex || 0) : c.columnIndex) || 0) * l - e / 2) * (g ? -1 : 1)
				}
			},
			translate: function() {
				var a = this,
					b = a.chart,
					c = a.options,
					d = a.borderWidth = n(c.borderWidth, a.activePointCount > .5 * a.xAxis.len ? 0 : 1),
					e = a.yAxis,
					f = a.translatedThreshold = e.getThreshold(c.threshold),
					g = n(c.minPointLength, 5),
					h = a.getColumnMetrics(),
					i = h.width,
					j = a.barW = na(i, 1 + 2 * d),
					k = a.pointXOffset = h.offset,
					l = -(d % 2 ? .5 : 0),
					m = d % 2 ? .5 : 1;
				b.renderer.isVML && b.inverted && (m += 1), c.pointPadding && (j = ma(j)), ub.prototype.translate.apply(a), Ua(a.points, function(c) {
					var d, h = n(c.yBottom, f),
						o = oa(na(-999 - h, c.plotY), e.len + 999 + h),
						p = c.plotX + k,
						q = j,
						r = oa(o, h);
					d = na(o, h) - r, pa(d) < g && g && (d = g, r = ka(pa(r - f) > g ? h - g : f - (e.translate(c.y, 0, 1, 0, 1) <= f ? g : 0))), c.barX = p, c.pointWidth = i, c.tooltipPos = b.inverted ? [e.len - o, a.xAxis.len - p - q / 2] : [p + q / 2, o + e.pos - b.plotTop], q = ka(p + q) + l, p = ka(p) + l, q -= p, h = pa(r) < .5, d = ka(r + d) + m, r = ka(r) + m, d -= r, h && (r -= 1, d += 1), c.shapeType = "rect", c.shapeArgs = {
						x: p,
						y: r,
						width: q,
						height: d
					}
				})
			},
			getSymbol: Ha,
			drawLegendSymbol: Qa.drawRectangle,
			drawGraph: Ha,
			drawPoints: function() {
				var a, c, d = this,
					e = this.chart,
					f = d.options,
					g = e.renderer,
					h = f.animationLimit || 250;
				Ua(d.points, function(i) {
					var j = i.plotY,
						l = i.graphic;
					j === K || isNaN(j) || null === i.y ? l && (i.graphic = l.destroy()) : (a = i.shapeArgs, j = k(d.borderWidth) ? {
						"stroke-width": d.borderWidth
					} : {}, c = i.pointAttr[i.selected ? "select" : ""] || d.pointAttr[""], l ? (bb(l), l.attr(j)[e.pointCount < h ? "animate" : "attr"](b(a))) : i.graphic = g[i.shapeType](a).attr(c).attr(j).add(d.group).shadow(f.shadow, null, f.stacking && !f.borderRadius))
				})
			},
			animate: function(a) {
				var b = this.yAxis,
					c = this.options,
					d = this.chart.inverted,
					e = {};
				Ca && (a ? (e.scaleY = .001, a = oa(b.pos + b.len, na(b.pos, b.toPixels(c.threshold))), d ? e.translateX = a - b.len : e.translateY = a, this.group.attr(e)) : (e.scaleY = 1, e[d ? "translateX" : "translateY"] = b.pos, this.group.animate(e, this.options.animation), this.animate = null))
			},
			remove: function() {
				var a = this,
					b = a.chart;
				b.hasRendered && Ua(b.series, function(b) {
					b.type === a.type && (b.isDirty = !0)
				}), ub.prototype.remove.apply(a, arguments)
			}
		}), Oa.column = jb, cb.bar = b(cb.column), vb = q(jb, {
			type: "bar",
			inverted: !0
		}), Oa.bar = vb, cb.scatter = b(Pa, {
			lineWidth: 0,
			tooltip: {
				headerFormat: '<span style="color:{series.color}">●</span> <span style="font-size: 10px;"> {series.name}</span><br/>',
				pointFormat: "x: <b>{point.x}</b><br/>y: <b>{point.y}</b><br/>"
			},
			stickyTracking: !1
		}), vb = q(ub, {
			type: "scatter",
			sorted: !1,
			requireSorting: !1,
			noSharedTooltip: !0,
			trackerGroups: ["markerGroup", "dataLabelsGroup"],
			takeOrdinalPosition: !1,
			singularTooltips: !0,
			drawGraph: function() {
				this.options.lineWidth && ub.prototype.drawGraph.call(this)
			}
		}), Oa.scatter = vb, cb.pie = b(Pa, {
			borderColor: "#FFFFFF",
			borderWidth: 1,
			center: [null, null],
			clip: !1,
			colorByPoint: !0,
			dataLabels: {
				distance: 30,
				enabled: !0,
				formatter: function() {
					return this.point.name
				}
			},
			ignoreHiddenPoint: !0,
			legendType: "point",
			marker: null,
			size: null,
			showInLegend: !1,
			slicedOffset: 10,
			states: {
				hover: {
					brightness: .1,
					shadow: !1
				}
			},
			stickyTracking: !1,
			tooltip: {
				followPointer: !0
			}
		}), Pa = {
			type: "pie",
			isCartesian: !1,
			pointClass: q(tb, {
				init: function() {
					tb.prototype.init.apply(this, arguments);
					var b, c = this;
					return c.y < 0 && (c.y = null), a(c, {
						visible: c.visible !== !1,
						name: n(c.name, "Slice")
					}), b = function(a) {
						c.slice("select" === a.type)
					}, Ya(c, "select", b), Ya(c, "unselect", b), c
				},
				setVisible: function(a) {
					var b = this,
						c = b.series,
						d = c.chart;
					b.visible = b.options.visible = a = a === K ? !b.visible : a, c.options.data[Ta(b, c.data)] = b.options, Ua(["graphic", "dataLabel", "connector", "shadowGroup"], function(c) {
						b[c] && b[c][a ? "show" : "hide"](!0)
					}), b.legendItem && d.legend.colorizeItem(b, a), !c.isDirty && c.options.ignoreHiddenPoint && (c.isDirty = !0, d.redraw())
				},
				slice: function(a, b, c) {
					var d = this.series;
					D(c, d.chart), n(b, !0), this.sliced = this.options.sliced = a = k(a) ? a : !this.sliced, d.options.data[Ta(this, d.data)] = this.options, a = a ? this.slicedTranslation : {
						translateX: 0,
						translateY: 0
					}, this.graphic.animate(a), this.shadowGroup && this.shadowGroup.animate(a)
				},
				haloPath: function(a) {
					var b = this.shapeArgs,
						c = this.series.chart;
					return this.sliced || !this.visible ? [] : this.series.chart.renderer.symbols.arc(c.plotLeft + b.x, c.plotTop + b.y, b.r + a, b.r + a, {
						innerR: this.shapeArgs.r,
						start: b.start,
						end: b.end
					})
				}
			}),
			requireSorting: !1,
			noSharedTooltip: !0,
			trackerGroups: ["group", "dataLabelsGroup"],
			axisTypes: [],
			pointAttrToOptions: {
				stroke: "borderColor",
				"stroke-width": "borderWidth",
				fill: "color"
			},
			singularTooltips: !0,
			getColor: Ha,
			animate: function(a) {
				var b = this,
					c = b.points,
					d = b.startAngleRad;
				a || (Ua(c, function(a) {
					var c = a.graphic,
						a = a.shapeArgs;
					c && (c.attr({
						r: b.center[3] / 2,
						start: d,
						end: d
					}), c.animate({
						r: a.r,
						start: a.start,
						end: a.end
					}, b.options.animation))
				}), b.animate = null)
			},
			setData: function(a, b, c, d) {
				ub.prototype.setData.call(this, a, !1, c, d), this.processData(), this.generatePoints(), n(b, !0) && this.chart.redraw(c)
			},
			generatePoints: function() {
				var a, b, c, d, e = 0,
					f = this.options.ignoreHiddenPoint;
				for (ub.prototype.generatePoints.call(this), b = this.points, c = b.length, a = 0; c > a; a++) d = b[a], e += f && !d.visible ? 0 : d.y;
				for (this.total = e, a = 0; c > a; a++) d = b[a], d.percentage = e > 0 ? d.y / e * 100 : 0, d.total = e
			},
			translate: function(a) {
				this.generatePoints();
				var b, c, d, e, f, g = 0,
					h = this.options,
					i = h.slicedOffset,
					j = i + h.borderWidth,
					k = h.startAngle || 0,
					l = this.startAngleRad = sa / 180 * (k - 90),
					k = (this.endAngleRad = sa / 180 * (n(h.endAngle, k + 360) - 90)) - l,
					m = this.points,
					o = h.dataLabels.distance,
					h = h.ignoreHiddenPoint,
					p = m.length;
				for (a || (this.center = a = this.getCenter()), this.getX = function(b, c) {
					return d = ja.asin(oa((b - a[1]) / (a[2] / 2 + o), 1)), a[0] + (c ? -1 : 1) * qa(d) * (a[2] / 2 + o)
				}, e = 0; p > e; e++) f = m[e], b = l + g * k, (!h || f.visible) && (g += f.percentage / 100), c = l + g * k, f.shapeType = "arc", f.shapeArgs = {
					x: a[0],
					y: a[1],
					r: a[2] / 2,
					innerR: a[3] / 2,
					start: ka(1e3 * b) / 1e3,
					end: ka(1e3 * c) / 1e3
				}, d = (c + b) / 2, d > 1.5 * sa ? d -= 2 * sa : -sa / 2 > d && (d += 2 * sa), f.slicedTranslation = {
					translateX: ka(qa(d) * i),
					translateY: ka(ra(d) * i)
				}, b = qa(d) * a[2] / 2, c = ra(d) * a[2] / 2, f.tooltipPos = [a[0] + .7 * b, a[1] + .7 * c], f.half = -sa / 2 > d || d > sa / 2 ? 1 : 0, f.angle = d, j = oa(j, o / 2), f.labelPos = [a[0] + b + qa(d) * o, a[1] + c + ra(d) * o, a[0] + b + qa(d) * j, a[1] + c + ra(d) * j, a[0] + b, a[1] + c, 0 > o ? "center" : f.half ? "right" : "left", d]
			},
			drawGraph: null,
			drawPoints: function() {
				var b, c, d, e, f = this,
					g = f.chart.renderer,
					h = f.options.shadow;
				h && !f.shadowGroup && (f.shadowGroup = g.g("shadow").add(f.group)), Ua(f.points, function(i) {
					c = i.graphic, e = i.shapeArgs, d = i.shadowGroup, h && !d && (d = i.shadowGroup = g.g("shadow").add(f.shadowGroup)), b = i.sliced ? i.slicedTranslation : {
						translateX: 0,
						translateY: 0
					}, d && d.attr(b), c ? c.animate(a(e, b)) : i.graphic = c = g[i.shapeType](e).setRadialReference(f.center).attr(i.pointAttr[i.selected ? "select" : ""]).attr({
						"stroke-linejoin": "round"
					}).attr(b).add(f.group).shadow(h, d), void 0 !== i.visible && i.setVisible(i.visible)
				})
			},
			sortByAngle: function(a, b) {
				a.sort(function(a, c) {
					return void 0 !== a.angle && (c.angle - a.angle) * b
				})
			},
			drawLegendSymbol: Qa.drawRectangle,
			getCenter: ib.getCenter,
			getSymbol: Ha
		}, Pa = q(ub, Pa), Oa.pie = Pa, ub.prototype.drawDataLabels = function() {
			var c, d, e, f, g = this,
				h = g.options,
				i = h.cursor,
				j = h.dataLabels,
				l = g.points,
				m = g.hasRendered || 0;
			(j.enabled || g._hasPointLabels) && (g.dlProcessOptions && g.dlProcessOptions(j), f = g.plotGroup("dataLabelsGroup", "data-labels", j.defer ? "hidden" : "visible", j.zIndex || 6), n(j.defer, !0) && (f.attr({
				opacity: +m
			}), m || Ya(g, "afterAnimate", function() {
				g.visible && f.show(), f[h.animation ? "animate" : "attr"]({
					opacity: 1
				}, {
					duration: 200
				})
			})), d = j, Ua(l, function(h) {
				var l, m, o, p = h.dataLabel,
					q = h.connector,
					r = !0;
				if (c = h.options && h.options.dataLabels, l = n(c && c.enabled, d.enabled), p && !l) h.dataLabel = p.destroy();
				else if (l) {
					if (j = b(d, c), l = j.rotation, m = h.getLabelConfig(), e = j.format ? u(j.format, m) : j.formatter.call(m, j), j.style.color = n(j.color, j.style.color, g.color, "black"), p) k(e) ? (p.attr({
						text: e
					}), r = !1) : (h.dataLabel = p = p.destroy(), q && (h.connector = q.destroy()));
					else if (k(e)) {
						p = {
							fill: j.backgroundColor,
							stroke: j.borderColor,
							"stroke-width": j.borderWidth,
							r: j.borderRadius || 0,
							rotation: l,
							padding: j.padding,
							zIndex: 1
						};
						for (o in p) p[o] === K && delete p[o];
						p = h.dataLabel = g.chart.renderer[l ? "text" : "label"](e, 0, -999, null, null, null, j.useHTML).attr(p).css(a(j.style, i && {
							cursor: i
						})).add(f).shadow(j.shadow)
					}
					p && g.alignDataLabel(h, p, j, null, r)
				}
			}))
		}, ub.prototype.alignDataLabel = function(b, c, d, e, f) {
			var g = this.chart,
				h = g.inverted,
				i = n(b.plotX, -999),
				j = n(b.plotY, -999),
				k = c.getBBox();
			(b = this.visible && (b.series.forceDL || g.isInsidePlot(i, ka(j), h) || e && g.isInsidePlot(i, h ? e.x + 1 : e.y + e.height - 1, h))) && (e = a({
				x: h ? g.plotWidth - j : i,
				y: ka(h ? g.plotHeight - i : j),
				width: 0,
				height: 0
			}, e), a(d, {
				width: k.width,
				height: k.height
			}), d.rotation ? c[f ? "attr" : "animate"]({
				x: e.x + d.x + e.width / 2,
				y: e.y + d.y + e.height / 2
			}).attr({
				align: d.align
			}) : (c.align(d, null, e), h = c.alignAttr, "justify" === n(d.overflow, "justify") ? this.justifyDataLabel(c, d, h, k, e, f) : n(d.crop, !0) && (b = g.isInsidePlot(h.x, h.y) && g.isInsidePlot(h.x + k.width, h.y + k.height)))), b || (c.attr({
				y: -999
			}), c.placed = !1)
		}, ub.prototype.justifyDataLabel = function(a, b, c, d, e, f) {
			var g, h, i = this.chart,
				j = b.align,
				k = b.verticalAlign;
			g = c.x, 0 > g && ("right" === j ? b.align = "left" : b.x = -g, h = !0), g = c.x + d.width, g > i.plotWidth && ("left" === j ? b.align = "right" : b.x = i.plotWidth - g, h = !0), g = c.y, 0 > g && ("bottom" === k ? b.verticalAlign = "top" : b.y = -g, h = !0), g = c.y + d.height, g > i.plotHeight && ("top" === k ? b.verticalAlign = "bottom" : b.y = i.plotHeight - g, h = !0), h && (a.placed = !f, a.align(b, null, e))
		}, Oa.pie && (Oa.pie.prototype.drawDataLabels = function() {
			var a, b, c, d, e, f, g, h, i, j, k, l = this,
				m = l.data,
				o = l.chart,
				p = l.options.dataLabels,
				q = n(p.connectorPadding, 10),
				r = n(p.connectorWidth, 1),
				s = o.plotWidth,
				t = o.plotHeight,
				u = n(p.softConnector, !0),
				v = p.distance,
				w = l.center,
				x = w[2] / 2,
				y = w[1],
				A = v > 0,
				B = [
					[],
					[]
				],
				C = [0, 0, 0, 0],
				D = function(a, b) {
					return b.y - a.y
				};
			if (l.visible && (p.enabled || l._hasPointLabels)) {
				for (ub.prototype.drawDataLabels.apply(l), Ua(m, function(a) {
					a.dataLabel && a.visible && B[a.half].push(a)
				}), j = 2; j--;) {
					var E, F = [],
						G = [],
						H = B[j],
						I = H.length;
					if (I) {
						for (l.sortByAngle(H, j - .5), k = m = 0; !m && H[k];) m = H[k] && H[k].dataLabel && (H[k].dataLabel.getBBox().height || 21), k++;
						if (v > 0) {
							for (e = oa(y + x + v, o.plotHeight), k = na(0, y - x - v); e >= k; k += m) F.push(k);
							if (e = F.length, I > e) {
								for (a = [].concat(H), a.sort(D), k = I; k--;) a[k].rank = k;
								for (k = I; k--;) H[k].rank >= e && H.splice(k, 1);
								I = H.length
							}
							for (k = 0; I > k; k++) {
								a = H[k], f = a.labelPos, a = 9999;
								var J, K;
								for (K = 0; e > K; K++) J = pa(F[K] - f[1]), a > J && (a = J, E = K);
								if (k > E && null !== F[k]) E = k;
								else for (I - k + E > e && null !== F[k] && (E = e - I + k); null === F[E];) E++;
								G.push({
									i: E,
									y: F[E]
								}), F[E] = null
							}
							G.sort(D)
						}
						for (k = 0; I > k; k++) a = H[k], f = a.labelPos, d = a.dataLabel, i = a.visible === !1 ? "hidden" : "visible", a = f[1], v > 0 ? (e = G.pop(), E = e.i, h = e.y, (a > h && null !== F[E + 1] || h > a && null !== F[E - 1]) && (h = oa(na(0, a), o.plotHeight))) : h = a, g = p.justify ? w[0] + (j ? -1 : 1) * (x + v) : l.getX(h === y - x - v || h === y + x + v ? a : h, j), d._attr = {
							visibility: i,
							align: f[6]
						}, d._pos = {
							x: g + p.x + ({
								left: q,
								right: -q
							}[f[6]] || 0),
							y: h + p.y - 10
						}, d.connX = g, d.connY = h, null === this.options.size && (e = d.width, q > g - e ? C[3] = na(ka(e - g + q), C[3]) : g + e > s - q && (C[1] = na(ka(g + e - s + q), C[1])), 0 > h - m / 2 ? C[0] = na(ka(-h + m / 2), C[0]) : h + m / 2 > t && (C[2] = na(ka(h + m / 2 - t), C[2])))
					}
				}(0 === z(C) || this.verifyDataLabelOverflow(C)) && (this.placeDataLabels(), A && r && Ua(this.points, function(a) {
					b = a.connector, f = a.labelPos, (d = a.dataLabel) && d._pos ? (i = d._attr.visibility, g = d.connX, h = d.connY, c = u ? ["M", g + ("left" === f[6] ? 5 : -5), h, "C", g, h, 2 * f[2] - f[4], 2 * f[3] - f[5], f[2], f[3], "L", f[4], f[5]] : ["M", g + ("left" === f[6] ? 5 : -5), h, "L", f[2], f[3], "L", f[4], f[5]], b ? (b.animate({
						d: c
					}), b.attr("visibility", i)) : a.connector = b = l.chart.renderer.path(c).attr({
						"stroke-width": r,
						stroke: p.connectorColor || a.color || "#606060",
						visibility: i
					}).add(l.dataLabelsGroup)) : b && (a.connector = b.destroy())
				}))
			}
		}, Oa.pie.prototype.placeDataLabels = function() {
			Ua(this.points, function(a) {
				var b, a = a.dataLabel;
				a && ((b = a._pos) ? (a.attr(a._attr), a[a.moved ? "animate" : "attr"](b), a.moved = !0) : a && a.attr({
					y: -999
				}))
			})
		}, Oa.pie.prototype.alignDataLabel = Ha, Oa.pie.prototype.verifyDataLabelOverflow = function(a) {
			var b, c = this.center,
				d = this.options,
				e = d.center,
				f = d = d.minSize || 80;
			return null !== e[0] ? f = na(c[2] - na(a[1], a[3]), d) : (f = na(c[2] - a[1] - a[3], d), c[0] += (a[3] - a[1]) / 2), null !== e[1] ? f = na(oa(f, c[2] - na(a[0], a[2])), d) : (f = na(oa(f, c[2] - a[0] - a[2]), d), c[1] += (a[0] - a[2]) / 2), f < c[2] ? (c[2] = f, this.translate(c), Ua(this.points, function(a) {
				a.dataLabel && (a.dataLabel._pos = null)
			}), this.drawDataLabels && this.drawDataLabels()) : b = !0, b
		}), Oa.column && (Oa.column.prototype.alignDataLabel = function(a, c, d, e, f) {
			var g = this.chart,
				h = g.inverted,
				i = a.dlBox || a.shapeArgs,
				j = a.below || a.plotY > n(this.translatedThreshold, g.plotSizeY),
				k = n(d.inside, !! this.options.stacking);
			i && (e = b(i), h && (e = {
				x: g.plotWidth - e.y - e.height,
				y: g.plotHeight - e.x - e.width,
				width: e.height,
				height: e.width
			}), !k) && (h ? (e.x += j ? 0 : e.width, e.width = 0) : (e.y += j ? e.height : 0, e.height = 0)), d.align = n(d.align, !h || k ? "center" : j ? "right" : "left"), d.verticalAlign = n(d.verticalAlign, h || k ? "middle" : j ? "top" : "bottom"), ub.prototype.alignDataLabel.call(this, a, c, d, e, f)
		}), Pa = ga.TrackerMixin = {
			drawTrackerPoint: function() {
				var a = this,
					b = a.chart,
					c = b.pointer,
					d = a.options.cursor,
					e = d && {
						cursor: d
					},
					f = function(c) {
						var d, e = c.target;
						for (b.hoverSeries !== a && a.onMouseOver(); e && !d;) d = e.point, e = e.parentNode;
						d !== K && d !== b.hoverPoint && d.onMouseOver(c)
					};
				Ua(a.points, function(a) {
					a.graphic && (a.graphic.element.point = a), a.dataLabel && (a.dataLabel.element.point = a)
				}), a._hasTracking || (Ua(a.trackerGroups, function(b) {
					a[b] && (a[b].addClass("highcharts-tracker").on("mouseover", f).on("mouseout", function(a) {
						c.onTrackerMouseOut(a)
					}).css(e), M) && a[b].on("touchstart", f)
				}), a._hasTracking = !0)
			},
			drawTrackerGraph: function() {
				var a, b = this,
					c = b.options,
					d = c.trackByArea,
					e = [].concat(d ? b.areaPath : b.graphPath),
					f = e.length,
					g = b.chart,
					h = g.pointer,
					i = g.renderer,
					j = g.options.tooltip.snap,
					k = b.tracker,
					l = c.cursor,
					m = l && {
						cursor: l
					},
					l = b.singlePoints,
					n = function() {
						g.hoverSeries !== b && b.onMouseOver()
					},
					o = "rgba(192,192,192," + (Ca ? 1e-4 : .002) + ")";
				if (f && !d) for (a = f + 1; a--;)"M" === e[a] && e.splice(a + 1, 0, e[a + 1] - j, e[a + 2], "L"), (a && "M" === e[a] || a === f) && e.splice(a, 0, "L", e[a - 2] + j, e[a - 1]);
				for (a = 0; a < l.length; a++) f = l[a], e.push("M", f.plotX - j, f.plotY, "L", f.plotX + j, f.plotY);
				k ? k.attr({
					d: e
				}) : (b.tracker = i.path(e).attr({
					"stroke-linejoin": "round",
					visibility: b.visible ? "visible" : "hidden",
					stroke: o,
					fill: d ? o : La,
					"stroke-width": c.lineWidth + (d ? 0 : 2 * j),
					zIndex: 2
				}).add(b.group), Ua([b.tracker, b.markerGroup], function(a) {
					a.addClass("highcharts-tracker").on("mouseover", n).on("mouseout", function(a) {
						h.onTrackerMouseOut(a)
					}).css(m), M && a.on("touchstart", n)
				}))
			}
		}, Oa.column && (jb.prototype.drawTracker = Pa.drawTrackerPoint), Oa.pie && (Oa.pie.prototype.drawTracker = Pa.drawTrackerPoint), Oa.scatter && (vb.prototype.drawTracker = Pa.drawTrackerPoint), a(sb.prototype, {
			setItemEvents: function(a, b, c, d, e) {
				var f = this;
				(c ? b : a.legendGroup).on("mouseover", function() {
					a.setState("hover"), b.css(f.options.itemHoverStyle)
				}).on("mouseout", function() {
					b.css(a.visible ? d : e), a.setState()
				}).on("click", function(b) {
					var c = function() {
							a.setVisible()
						},
						b = {
							browserEvent: b
						};
					a.firePointEvent ? a.firePointEvent("legendItemClick", b, c) : $a(a, "legendItemClick", b, c)
				})
			},
			createCheckboxForItem: function(a) {
				a.checkbox = p("input", {
					type: "checkbox",
					checked: a.selected,
					defaultChecked: a.selected
				}, this.options.itemCheckboxStyle, this.chart.container), Ya(a.checkbox, "click", function(b) {
					$a(a, "checkboxClick", {
						checked: b.target.checked
					}, function() {
						a.select()
					})
				})
			}
		}), O.legend.itemStyle.cursor = "pointer", a(I.prototype, {
			showResetZoom: function() {
				var a = this,
					b = O.lang,
					c = a.options.chart.resetZoomButton,
					d = c.theme,
					e = d.states,
					f = "chart" === c.relativeTo ? null : "plotBox";
				this.resetZoomButton = a.renderer.button(b.resetZoom, null, null, function() {
					a.zoomOut()
				}, d, e && e.hover).attr({
					align: c.position.align,
					title: b.resetZoomTitle
				}).add().align(c.position, !1, f)
			},
			zoomOut: function() {
				var a = this;
				$a(a, "selection", {
					resetSelection: !0
				}, function() {
					a.zoom()
				})
			},
			zoom: function(a) {
				var b, c, d = this.pointer,
					f = !1;
				!a || a.resetSelection ? Ua(this.axes, function(a) {
					b = a.zoom()
				}) : Ua(a.xAxis.concat(a.yAxis), function(a) {
					var c = a.axis,
						e = c.isXAxis;
					(d[e ? "zoomX" : "zoomY"] || d[e ? "pinchX" : "pinchY"]) && (b = c.zoom(a.min, a.max), c.displayBtn && (f = !0))
				}), c = this.resetZoomButton, f && !c ? this.showResetZoom() : !f && e(c) && (this.resetZoomButton = c.destroy()), b && this.redraw(n(this.options.chart.animation, a && a.animation, this.pointCount < 100))
			},
			pan: function(a, b) {
				var c, d = this,
					e = d.hoverPoints;
				e && Ua(e, function(a) {
					a.setState()
				}), Ua("xy" === b ? [1, 0] : [1], function(b) {
					var e = a[b ? "chartX" : "chartY"],
						f = d[b ? "xAxis" : "yAxis"][0],
						g = d[b ? "mouseDownX" : "mouseDownY"],
						h = (f.pointRange || 0) / 2,
						i = f.getExtremes(),
						j = f.toValue(g - e, !0) + h,
						g = f.toValue(g + d[b ? "plotWidth" : "plotHeight"] - e, !0) - h;
					f.series.length && j > oa(i.dataMin, i.min) && g < na(i.dataMax, i.max) && (f.setExtremes(j, g, !1, !1, {
						trigger: "pan"
					}), c = !0), d[b ? "mouseDownX" : "mouseDownY"] = e
				}), c && d.redraw(!1), o(d.container, {
					cursor: "move"
				})
			}
		}), a(tb.prototype, {
			select: function(a, b) {
				var c = this,
					d = c.series,
					e = d.chart,
					a = n(a, !c.selected);
				c.firePointEvent(a ? "select" : "unselect", {
					accumulate: b
				}, function() {
					c.selected = c.options.selected = a, d.options.data[Ta(c, d.data)] = c.options, c.setState(a && "select"), b || Ua(e.getSelectedPoints(), function(a) {
						a.selected && a !== c && (a.selected = a.options.selected = !1, d.options.data[Ta(a, d.data)] = a.options, a.setState(""), a.firePointEvent("unselect"))
					})
				})
			},
			onMouseOver: function(a) {
				var b = this.series,
					c = b.chart,
					d = c.tooltip,
					e = c.hoverPoint;
				e && e !== this && e.onMouseOut(), this.firePointEvent("mouseOver"), d && (!d.shared || b.noSharedTooltip) && d.refresh(this, a), this.setState("hover"), c.hoverPoint = this
			},
			onMouseOut: function() {
				var a = this.series.chart,
					b = a.hoverPoints;
				this.firePointEvent("mouseOut"), b && -1 !== Ta(this, b) || (this.setState(), a.hoverPoint = null)
			},
			importEvents: function() {
				if (!this.hasImportedEvents) {
					var a, c = b(this.series.options.point, this.options).events;
					this.events = c;
					for (a in c) Ya(this, a, c[a]);
					this.hasImportedEvents = !0
				}
			},
			setState: function(c, d) {
				var e, f = this.plotX,
					g = this.plotY,
					h = this.series,
					i = h.options.states,
					j = cb[h.type].marker && h.options.marker,
					k = j && !j.enabled,
					l = j && j.states[c],
					m = l && l.enabled === !1,
					n = h.stateMarkerGraphic,
					o = this.marker || {},
					p = h.chart,
					q = h.halo,
					c = c || "";
				e = this.pointAttr[c] || h.pointAttr[c], c === this.state && !d || this.selected && "select" !== c || i[c] && i[c].enabled === !1 || c && (m || k && l.enabled === !1) || c && o.states && o.states[c] && o.states[c].enabled === !1 || (this.graphic ? (j = j && this.graphic.symbolName && e.r, this.graphic.attr(b(e, j ? {
					x: f - j,
					y: g - j,
					width: 2 * j,
					height: 2 * j
				} : {})), n && n.hide()) : (c && l && (j = l.radius, o = o.symbol || h.symbol, n && n.currentSymbol !== o && (n = n.destroy()), n ? n[d ? "animate" : "attr"]({
					x: f - j,
					y: g - j
				}) : o && (h.stateMarkerGraphic = n = p.renderer.symbol(o, f - j, g - j, 2 * j, 2 * j).attr(e).add(h.markerGroup), n.currentSymbol = o)), n && n[c && p.isInsidePlot(f, g, p.inverted) ? "show" : "hide"]()), (f = i[c] && i[c].halo) && f.size ? (q || (h.halo = q = p.renderer.path().add(h.seriesGroup)), q.attr(a({
					fill: gb(this.color || h.color).setOpacity(f.opacity).get()
				}, f.attributes))[d ? "animate" : "attr"]({
					d: this.haloPath(f.size)
				})) : q && q.attr({
					d: []
				}), this.state = c)
			},
			haloPath: function(a) {
				var b = this.series,
					c = b.chart,
					d = b.getPlotBox(),
					e = c.inverted;
				return c.renderer.symbols.circle(d.translateX + (e ? b.yAxis.len - this.plotY : this.plotX) - a, d.translateY + (e ? b.xAxis.len - this.plotX : this.plotY) - a, 2 * a, 2 * a)
			}
		}), a(ub.prototype, {
			onMouseOver: function() {
				var a = this.chart,
					b = a.hoverSeries;
				b && b !== this && b.onMouseOut(), this.options.events.mouseOver && $a(this, "mouseOver"), this.setState("hover"), a.hoverSeries = this
			},
			onMouseOut: function() {
				var a = this.options,
					b = this.chart,
					c = b.tooltip,
					d = b.hoverPoint;
				d && d.onMouseOut(), this && a.events.mouseOut && $a(this, "mouseOut"), c && !a.stickyTracking && (!c.shared || this.noSharedTooltip) && c.hide(), this.setState(), b.hoverSeries = null
			},
			setState: function(a) {
				var b = this.options,
					c = this.graph,
					d = this.graphNeg,
					e = b.states,
					b = b.lineWidth,
					a = a || "";
				this.state !== a && (this.state = a, e[a] && e[a].enabled === !1 || (a && (b = e[a].lineWidth || b + (e[a].lineWidthPlus || 0)), c && !c.dashstyle && (a = {
					"stroke-width": b
				}, c.attr(a), d && d.attr(a))))
			},
			setVisible: function(a, b) {
				var c, d = this,
					e = d.chart,
					f = d.legendItem,
					g = e.options.chart.ignoreHiddenSeries,
					h = d.visible;
				c = (d.visible = a = d.userOptions.visible = a === K ? !h : a) ? "show" : "hide", Ua(["group", "dataLabelsGroup", "markerGroup", "tracker"], function(a) {
					d[a] && d[a][c]()
				}), e.hoverSeries === d && d.onMouseOut(), f && e.legend.colorizeItem(d, a), d.isDirty = !0, d.options.stacking && Ua(e.series, function(a) {
					a.options.stacking && a.visible && (a.isDirty = !0)
				}), Ua(d.linkedSeries, function(b) {
					b.setVisible(a, !1)
				}), g && (e.isDirtyBox = !0), b !== !1 && e.redraw(), $a(d, c)
			},
			setTooltipPoints: function(a) {
				var b, c, d, e, f = [],
					g = this.xAxis,
					h = g && g.getExtremes(),
					i = g ? g.tooltipLen || g.len : this.chart.plotSizeX,
					j = [];
				if (this.options.enableMouseTracking !== !1 && !this.singularTooltips) {
					for (a && (this.tooltipPoints = null), Ua(this.segments || this.points, function(a) {
						f = f.concat(a)
					}), g && g.reversed && (f = f.reverse()), this.orderTooltipPoints && this.orderTooltipPoints(f), a = f.length, e = 0; a > e; e++) if (g = f[e], b = g.x, b >= h.min && b <= h.max) for (d = f[e + 1], b = c === K ? 0 : c + 1, c = f[e + 1] ? oa(na(0, la((g.clientX + (d ? d.wrappedClientX || d.clientX : i)) / 2)), i) : i; b >= 0 && c >= b;) j[b++] = g;
					this.tooltipPoints = j
				}
			},
			show: function() {
				this.setVisible(!0)
			},
			hide: function() {
				this.setVisible(!1)
			},
			select: function(a) {
				this.selected = a = a === K ? !this.selected : a, this.checkbox && (this.checkbox.checked = a), $a(this, a ? "select" : "unselect")
			},
			drawTracker: Pa.drawTrackerGraph
		}), a(ga, {
			Axis: H,
			Chart: I,
			Color: gb,
			Point: tb,
			Tick: G,
			Renderer: L,
			Series: ub,
			SVGElement: F,
			SVGRenderer: hb,
			arrayMin: y,
			arrayMax: z,
			charts: Ia,
			dateFormat: P,
			format: u,
			pathAnim: R,
			getOptions: function() {
				return O
			},
			hasBidiBug: Da,
			isTouchDevice: Aa,
			numberFormat: r,
			seriesTypes: Oa,
			setOptions: function(a) {
				return O = b(!0, O, a), E(), O
			},
			addEvent: Ya,
			removeEvent: Za,
			createElement: p,
			discardElement: B,
			css: o,
			each: Ua,
			extend: a,
			map: Xa,
			merge: b,
			pick: n,
			splat: m,
			extendClass: q,
			pInt: c,
			wrap: t,
			svg: Ca,
			canvas: Ea,
			vml: !Ca && !Ea,
			product: "Highcharts",
			version: "4.0.4"
		})
	}()
}), define("css!carousel", [], function() {}), define("carousel", ["require", "exports", "module", "jquery", "css!carousel", "support/transitionend"], function(a) {
	a("jquery");
	a("css!carousel"), a("support/transitionend")(), function(a) {
		a.fn.carousel = function(b) {
			var c = a.extend({
				animate: "move",
				nav: !0,
				directionBtn: "responsive",
				event: "mouseover",
				speed: 500,
				autoPlay: !0,
				touch: !0,
				time: 5e3,
				navAlign: "center"
			}, b || {});
			return this.each(function() {
				var b = a(this),
					d = b.find(".carousel_wrap"),
					e = d.find(".carousel_item"),
					f = e.length,
					g = 0;
				b[0].cParam = {}, e.each(function() {
					var b = a(this),
						c = b.data("bg"),
						d = b.data("bgWidth");
					c && b.css("#" == c.charAt(0) ? {
						background: c
					} : d > 1900 ? {
						background: "url(" + c + ") center top no-repeat"
					} : {
						background: "url(" + c + ")"
					})
				}), "move" == c.animate ? (d.width(100 * f + "%").addClass("carousel_move").css({
					"transition-duration": c.speed + "ms"
				}), e.width(100 / f + "%")) : "fade" == c.animate && (d.addClass("carousel_fade"), e.css({
					"transition-duration": "0"
				}).eq(0).css({
					"z-index": 3
				}), b.show(), d.height(e.height()), a(window).on("resize", function() {
					d.height(e.height())
				})), b.show();
				var h = null;
				if (c.nav instanceof jQuery) h = c.nav;
				else if (c.nav) {
					var i = "",
						j = "";
					"left" == c.navAlign ? j = "carousel_nav_left" : "right" == c.navAlign ? j = "carousel_nav_right" : "center" == c.navAlign && (j = "carousel_nav_center"), e.data("img") ? (i = '<ol class="' + j + ' carousel_nav_img carousel_nav">', e.each(function() {
						i += '<li><img src="' + a(this).data("img") + '"></li>'
					})) : (i = '<ol class="' + j + ' carousel_nav_circle carousel_nav" id="carousel_nav">', e.each(function() {
						i += "<li></li>"
					})), i += "</ol>", h = a(i).appendTo(b)
				}
				var k = h.find("li"),
					l = function(c) {
						a.support.transition ? (d.on("bsTransitionEnd", function() {
							b.trigger("carousel.end"), d.off("bsTransitionEnd")
						}), b.trigger("carousel.start"), d.css({
							transform: "translate3d(" + -c * (100 / f) + "%,0,0)"
						})) : (b.trigger("carousel.start"), d.css({
							transform: "translate(" + -c * (100 / f) + "%,0)"
						}), b.trigger("carousel.end")), k.eq(c).addClass("active").siblings().removeClass("active")
					},
					m = function(a) {
						b[0].cParam.$li.css({
							"z-index": 2
						}).stop().animate({
							opacity: 1
						}, c.speed).siblings().css({
							"z-index": 1
						}).stop().animate({
							opacity: 0
						}, c.speed), k.eq(a).addClass("active").siblings().removeClass("active")
					},
					n = function(a) {
						b[0].cParam.$li = e.eq(a), b[0].cParam.$nav = k.eq(a), b[0].cParam.index = a, "move" == c.animate ? l(a) : "fade" == c.animate && m(a)
					};
				k.on(c.event, function() {
					var b = a(this);
					g = b.index(), n(g)
				}).eq(0).addClass("active");
				var o = function() {
						g = (g + 1) % f, n(g)
					},
					p = null;
				c.autoPlay && (p = setInterval(o, c.time), b.on({
					mouseover: function() {
						clearInterval(p)
					},
					mouseout: function() {
						clearInterval(p), p = setInterval(o, c.time)
					}
				}));
				var q = [];
				if (c.directionBtn === !0 || "responsive" === c.directionBtn) {
					var r = "responsive" === c.directionBtn ? "carousel_responsive_direction_btn" : "carousel_direction_btn",
						s = a('<span class="' + r + ' carousel_left_btn"></span>'),
						t = a('<span class="' + r + ' carousel_right_btn"></span>');
					b.append(s.add(t)), q.push(s), q.push(t)
				} else c.directionBtn instanceof Array && (q = c.directionBtn);
				c.directionBtn && (q[0].on("click", function() {
					g = (g + f - 1) % f, n(g)
				}), q[1].on("click", function() {
					o()
				}))
			})
		}
	}(jQuery)
}), function() {
	define("cs!courseBtnStatus", ["require", "cs!timeStatus"], function(a) {
		var b, c;
		return c = a("cs!timeStatus"), b = function(a) {
			var b, d;
			return d = function() {
				return a.followed ? "followed" : "follow"
			}, a.condition_completed ? "xuetangX" !== a.owner ? d() : (b = c.main(a.enrollment_start, a.enrollment_end, a.start, a.end), "preStart_register" === b.state || "end_register" === b.state && !a.enrolled ? d() : "preStart_course" === b.state ? a.enrolled ? "joined" : "join" : "start_course" === b.state || "end_course" === b.state ? a.enrolled ? "enter" : "join" : "preCourse_postRegister" === b.state ? a.enrolled ? "joined" : d() : "startCourse_postRegister" === b.state || "end_register" === b.state ? a.enrolled ? "enter" : d() : void 0) : "condition_completed"
		}
	})
}.call(this), function() {
	define("cs!courseBtnEvents", ["require", "jquery", "cs!timeStatus", "alert", "modalPlus"], function(a) {
		var b, c, d, e, f;
		return b = a("jquery"), f = a("cs!timeStatus"), d = a("alert"), e = a("modalPlus"), c = function(a) {
			var c, d, e, g, h, i;
			return a.$btn.length ? (c = a.$btn, c[0].cParam = {}, c.on("notLogin", function() {
				var c;
				return c = encodeURI(a.courseId), b(this).attr({
					href: "javascript:",
					target: "_self"
				}).on("click", function() {
					return b(document).trigger("goToLogin").on("userDataForSend", function(b, c) {
						switch (c.course_id = a.courseId, a.type) {
						case "join":
						case "joined":
						case "enter":
							return c.enrollment_action = "enroll";
						case "followed":
						case "follow":
							return c.enrollment_action = "follow"
						}
					})
				})
			}), c.on("followed", function() {
				var a;
				return a = b(this), a.on({
					mouseover: function() {
						return a.html("取消关注")
					},
					mouseout: function() {
						return a.html("已关注")
					}
				})
			}), c.on("follow", function() {
				var c;
				return c = b(this), c[0].cParam.isFollow ? c.html("关注课程").off("mouseover mouseout").trigger("cancelFollow") : (b._data(c[0], "events").mouseover || c.trigger("followed"), c.html("已关注").trigger("addFollow"), "xuetangX" === a.owner ? b.modalPlus({
					type: "hint",
					HTML: "关注成功！课程开课时你将会收到通知。"
				}) : c.trigger("followModalForNotOwner"))
			}), g = function() {
				return a.authenticated ? !0 : (c.trigger("notLogin"), !1)
			}, d = function(a) {
				return b.modalPlus({
					color: "red",
					type: "alert",
					HTML: a
				})
			}, "join" === a.type && g() ? (h = f.courseOpen(a.start, a.end), i = a.majorEnrolled ? a.majorUrl : a.ajaxUrl, c.on("click", function() {
				return b.ajax({
					url: i,
					type: "post",
					data: {
						course_id: a.courseId,
						enrollment_action: "enroll"
					},
					dataType: "text"
				}).done(function() {
					return 1 === h || 0 === h ? (c.off("click").attr("href", "/courses/" + encodeURI(a.courseId) + "/info").html("进入课程"), c.trigger("changeToEnter")) : -1 === h ? (c.off("click").attr("href", "javascript:").html("已加入").css("cursor", "default"), c.trigger("changeToJoined")) : void 0
				}).fail(function() {
					return d("链接服务器失败！")
				})
			})) : "follow" !== a.type && "followed" !== a.type || !g() ? void 0 : (e = "follow" === a.type ? !1 : !0, e && c.trigger("followed"), c.on("click", function() {
				return b.ajax({
					url: a.ajaxUrl,
					type: "post",
					data: {
						course_id: a.courseId,
						enrollment_action: e ? "unfollow" : "follow"
					},
					dataType: "text"
				}).done(function() {
					return c[0].cParam.isFollow = e, c.trigger("follow"), e = !e
				}).fail(function() {
					return d("链接服务器失败！")
				})
			}))) : !1
		}
	})
}.call(this), function() {
	define("cs!appSrc/coffee/courseDetail", ["require", "jquery", "cs!timeStatus", "alert", "modalPlus", "jsrender.min", "djangoAjaxPost", "jquery.highcharts", "carousel", "appCommon", "cs!courseBtnStatus", "cs!courseBtnEvents"], function(require) {
		var $, appCommon, courseBtnEvents, courseBtnStatus, modal, modalPlus, timeStatus;
		return $ = require("jquery"), timeStatus = require("cs!timeStatus"), modal = require("alert"), modalPlus = require("modalPlus"), require("jsrender.min"), require("djangoAjaxPost"), require("jquery.highcharts"), require("carousel"), appCommon = require("appCommon"), courseBtnStatus = require("cs!courseBtnStatus"), courseBtnEvents = require("cs!courseBtnEvents"), $("#js_xy_course_detail").length ? appCommon(function() {
			var $container, $he, $txta, isShow, tpl, tplref;
			return $container = $("#course_data"), tpl = $.templates("#course_data_template"), $.ajax({
				url: $container.data("url"),
				data: $container.data("parameter"),
				dataType: "json"
			}).done(function(response) {
				var $btn, $btn_join_certi, $chart, courseStatus, tEnd, tEnrollment_end, tEnrollment_start, tStart;
				return tEnrollment_start = $container.data("enrollment_start"), tEnrollment_end = $container.data("enrollment_end"), tStart = $container.data("start"), tEnd = $container.data("end"), courseStatus = timeStatus.main(tEnrollment_start, tEnrollment_end, tStart, tEnd), response.courseStatus = courseStatus, response.course = {}, response.course.course_id = $container.data("course_id"), response.course.course_id_encode = encodeURI(response.course.course_id), response.course.owner = $container.data("owner"), response.course.enrollment = $container.data("enrollment"), response.course.change_enrollment = $container.data("change_enrollment"), response.course.original_url = $container.data("original_url"), response.course.serialized = $container.data("serialized"), response.course.iscertificate = $container.data("iscertificate"), response.course.ishonorcourse = $container.data("ishonorcourse"), response.courseBtnStatus = courseBtnStatus({
					followed: response.followed,
					enrolled: response.enrolled,
					owner: $container.data("owner"),
					enrollment_start: tEnrollment_start,
					enrollment_end: tEnrollment_end,
					start: tStart,
					end: tEnd,
					condition_completed: response.condition_completed
				}), $container.html(tpl.render(response)), $btn = $("#join_free"), $btn_join_certi = $("#join_certi"), response.course.iscertificate && !response.authenticated && $btn_join_certi.length && $btn_join_certi.on("click", function(a) {
					return a.preventDefault(), $(document).trigger("goToLogin").on("userDataForSend", function(a, b) {
						return b.course_id = response.course.course_id, b.enrollment_action = "verify"
					})
				}), $btn.on("changeToJoined", function() {
					var a;
					return $(this).addClass("btn_3").removeClass("btn_1"), $btn_join_certi.length && $btn_join_certi.remove(), a = $("#title1").html(), $.modalPlus({
						color: "green",
						title: "您已经成功加入课程:《" + a + "》!",
						HTML: '<div class="g_modal_plus_alert_text">本课程尚未开课，请留意站内信通知，不要错过开课时间。</div>',
						btns: {
							color: "orange",
							text: '<a href="/courses" style="color: #ffffff;text-shadow: none;background-image: none;">浏览更多课程</a>'
						}
					})
				}), $btn.on("changeToEnter", function() {
					var a;
					return $(this).addClass("btn_2").removeClass("btn_1"), $btn_join_certi.length && $btn_join_certi.remove(), a = $("#title1").html(), response.course.serialized < 0 && (response.course.serialized = 0), $.modalPlus({
						color: "green",
						title: "您已经成功加入课程:《" + a + "》!",
						HTML: '<div class="4">本课程已更新至第' + response.course.serialized + "章</div>",
						btns: {
							color: "orange",
							text: '<a href="/courses/' + encodeURI(response.course.course_id) + '/info" style="color: #ffffff;text-shadow: none;background-image: none;">开始学习</a>'
						}
					})
				}), $btn.on("cancelFollow", function() {
					return $(this).removeClass("btn_followed").addClass("btn_add_follow")
				}), $btn.on("addFollow", function() {
					return $(this).removeClass("btn_add_follow").addClass("btn_followed")
				}), $btn.on("followModalForNotOwner", function() {
					return "edX" === response.course.owner ? $.modalPlus({
						type: "hint",
						HTML: "关注成功！课程开课时你将会收到通知。"
					}) : void 0
				}), response.condition_completed && courseBtnEvents({
					$btn: $btn,
					courseId: response.course.course_id,
					authenticated: response.authenticated,
					owner: response.course.owner,
					followed: response.followed,
					enrolled: response.enrolled,
					type: $btn.data("type"),
					enrollment_start: tEnrollment_start,
					enrollment_end: tEnrollment_end,
					start: tStart,
					end: tEnd,
					ajaxUrl: response.course.change_enrollment,
					majorUrl: $container.data("verified_enrollment"),
					majorEnrolled: response.major_enrolled
				}), $chart = $("#chart"), $chart.length && new Highcharts.Chart({
					chart: {
						renderTo: "chart",
						type: "area"
					},
					title: {
						text: ""
					},
					credits: !1,
					legend: {
						enabled: !1
					},
					colors: ["#5c91b5"],
					xAxis: {
						categories: eval($container.data("enrollment_history_data")),
						tickmarkPlacement: "on"
					},
					yAxis: {
						title: ""
					},
					series: [{
						name: "人数",
						data: eval($container.data("enrollment_history"))
					}]
				}), $("#ewm").length ? $("#ewm").on("click", function() {
					return modal({
						titleHTML: "<h3><span>微信关注</span> 最新课程资讯</h3>",
						isDoBtn: 0,
						mainHTML: '<img src="http://www.xuetangx.com/courses/TsinghuaX/80512073_2014_2X/static/images/alert/weixin.gif" alt="微信关注" title="微信关注" />',
						id: "footer_wxgz"
					})
				}) : void 0
			}).fail(function() {
				return $.modalPlus({
					color: "red",
					type: "alert",
					HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				})
			}), $("#alert_video").on("click", function() {
				return modal({
					titleHTML: '<span style="font-size:16px; padding:0 0 0 20px; line-height:50px; color:#fff;">' + $("#title1").html() + "</span>",
					mainHTML: '<div style="background:url(../static/images/alert/loading.gif) no-repeat center center;">' + $("#video_code").val() + "</div>",
					isDoBtn: 0,
					id: "video_alert"
				})
			}), isShow = !1, $txta = $("#course_list").find(".content"), $he = $txta.css("max-height"), $("#show_all").on("click", function() {
				return isShow ? ($txta.css({
					"max-height": $he
				}), $(this).html("展开全部")) : ($txta[0].style.cssText = "", $(this).html("收起")), isShow = !isShow, !1
			}), $("#list").add("#list1").find(".down").on("click", function() {
				var a, b;
				return b = $(this), a = b.parent().parent().next(), b.data("bl") ? (a.hide(), b.removeClass("on").data("bl", !1).find("span").html("展开")) : (a.show(), b.addClass("on").data("bl", !0).find("span").html("收缩")), !1
			}), $("#carousel").find(".carousel_item").length > 1 && $("#conRight_id").removeClass("hide"), $("#carousel").carousel({
				nav: $("#teacher_nav"),
				directionBtn: [$("#preBtnCircle"), $("#nextBtnCircle")],
				event: "click",
				autoPlay: !1
			}), tplref = $.templates("#course_ref_template"), $.ajax({
				url: $("#course_ref_template").data("url"),
				dataType: "json"
			}).done(function(a) {
				return $("#courseref_content").html(tplref.render(a))
			})
		}) : !1
	})
}.call(this), define("appSrc/include/index/courseSearch", ["jquery", "appCommon", "djangoAjaxPost", "modalPlus"], function(a, b) {
	return a("#js_xy_course_search").length ? void b(function() {
		function b(b) {
			return a("#" + b).is(":checked")
		}
		function c(c) {
			return i.html("").addClass("list_style_bg"), k.hide(), a.ajax({
				data: {
					offset: 0,
					limit: 10,
					started: b("sx"),
					hasTA: b("zj")
				}
			}).done(function(a) {
				c(), d(a)
			}).fail(function(b) {
				// a.modalPlus(0 == b.readyState ? {
				// 	type: "alert",
				// 	color: "red",
				// 	HTML: "上次的请求还未完结，请您稍等片刻再操作！"
				// } : {
				// 	type: "alert",
				// 	color: "red",
				// 	HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				// })
			}), !1
		}
		function d(b) {
			if ($data_bak = b, k.show(), i.removeClass("list_style_bg"), m = !0, b.data.length) {
				for (var c = "", d = 0, e = b.data.length; e > d; d++) c += '<li class="cf image_scale"> <div class="img fl"> <div class="cover"><a href="' + b.data[d].href + '" title="点击查看" target="_blank">点击查看</a></div> <img src="' + b.data[d].thumbnail + '" alt="' + b.data[d].name + '" title="' + b.data[d].name + '" /> </div> <div class="fl center"> <p class="name">' + (b.data[d].staff_title || "") + "&nbsp;&nbsp;" + (b.data[d].staff_name || "") + '</p> <h3><a href="' + b.data[d].href + '" title="' + b.data[d].name + '" target="_blank">' + b.data[d].name + "&nbsp;&nbsp;<span>" + b.data[d].org + "&nbsp;" + b.data[d].course_num + '</span></a></h3> <p class="txt">' + b.data[d].subtitle + "</p> </div>", "edx" == b.data[d].owner.toLowerCase() ? c += '<div class="right_edx fl"> <p>由edX联盟高校提供</p> </div></li>' : (b.data[d].serialized < 0 ? c += '<div class="right fl"><p class="green">即将开课</p> <p class="updata">更新于 ' + b.data[d].modified + "</p>" : b.data[d].hasTA ? b.data[d].hasTA && null != b.data[d].serialized && (c += '<div class="right fl"><p class="orange">连载至第' + b.data[d].serialized + '讲</p> <p class="updata">更新于 ' + b.data[d].modified + "</p>") : c += '<div class="right fl"><p>已完结</p> <p class="updata">更新于 ' + b.data[d].modified + "</p>", c += b.data[d].hasTA ? "<p><a>助教在线</a></p></div> </li>" : "</div></li>");
				i.html(c), k.show(), b.next_parameters.offset ? (k.find(".btn2").hide(), k.find(".btn1").show().find("span").html(b.total - b.next_parameters.offset)) : b.next_parameters.cid ? (k.find(".btn1").hide(), k.find(".btn2").show().html("查看下一门课程：" + b.next_parameters.name)) : k.hide()
			} else i.hide(), k.hide(), a("#no_data").show();
			l = !1
		}
		var e = a("#search"),
			f = e.find(".text"),
			g = e.find(".win"),
			h = e.find(".left span"),
			i = a("#list_style").addClass("list_style_bg"),
			j = g.height(),
			k = a("#show_more"),
			l = !1,
			m = !0;
		g.css("height", 0).show(), function() {
			var b = e.offset().top,
				c = a(window),
				d = !1;
			c.on("scroll", function() {
				var a = c.scrollTop();
				a >= b && !d ? (e.css({
					position: "fixed"
				}), d = !d) : d && b > a && (e.css("position", "relative"), d = !d)
			})
		}();
		var n = location.search;
		n && (ajax_url.indexOf("?") > -1 && (n = "?" + n.substring(1)), ajax_url += n), a.ajaxSetup({
			url: ajax_url,
			dataType: "json",
			beforeSend: function() {
				return l ? !1 : void(l = !0)
			}
		}), f.on({
			focus: function() {
				g.css("height", j), e.find("i").addClass("on"), m = !1
			},
			click: function(a) {
				a && a.stopPropagation ? a.stopPropagation() : window.event.cancelBubble = !0
			}
		}), e.find(".search").on("click", function(b) {
			b && b.stopPropagation ? b.stopPropagation() : window.event.cancelBubble = !0, m ? (a(this).find(".text").focus(), m = !1) : a(document).trigger("click")
		}), a(document).on("click", function() {
			g.css("height", 0), e.find("i").removeClass("on"), m = !0
		}), a(document).ajaxStart(function() {
			g.css("height", 0), e.find("i").removeClass("on"), a("#no_data").hide(), i.show(), a('<div id="loadingbar" class="loadingbar_animate"></div>').appendTo("body")
		}), a(document).ajaxComplete(function() {
			a("#loadingbar").removeClass("loadingbar_animate").width("100%").fadeOut(function() {
				a(this).remove()
			})
		}), a.ajax({
			data: $data_bak
		}).done(function(a) {
			d(a)
		}).fail(function(b) {
			// a.modalPlus(0 == b.readyState ? {
			// 	type: "alert",
			// 	color: "red",
			// 	HTML: "上次的请求还未完结，请您稍等片刻再操作！"
			// } : {
			// 	type: "alert",
			// 	color: "red",
			// 	HTML: "获取数据失败，请检测您的网络链接是否已断开！"
			// })
		}), g.find(".xkfl a").on("click", function() {
			var c = a(this);
			return i.html("").addClass("list_style_bg"), k.hide(), a.ajax({
				data: {
					limit: 10,
					offset: 0,
					cid: c.data("id"),
					started: b("sx"),
					hasTA: b("zj")
				}
			}).done(function(a) {
				e.find(".search").hide(), e.find(".left .search_re_wrap").show().find("a").html(c.html()), d(a)
			}).fail(function(b) {
				a.modalPlus(0 == b.readyState ? {
					type: "alert",
					color: "red",
					HTML: "上次的请求还未完结，请您稍等片刻再操作！"
				} : {
					type: "alert",
					color: "red",
					HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				})
			}), !1
		}), f.on("input", function() {
			var c;
			return function() {
				clearTimeout(c), c = setTimeout(function() {
					return "" == f.val() || "查找课程名称、课程代码、关键词..." == f.val() ? !1 : (i.html("").addClass("list_style_bg"), k.hide(), void a.ajax({
						data: {
							query: f.val(),
							limit: 10,
							offset: 0,
							started: b("sx"),
							hasTA: b("zj")
						},
						beforeSend: function() {}
					}).done(function(a) {
						h.css("display", "inline-block"), d(a)
					}).fail(function(b) {
						a.modalPlus(0 == b.readyState ? {
							type: "alert",
							color: "red",
							HTML: "上次的请求还未完结，请您稍等片刻再操作！"
						} : {
							type: "alert",
							color: "red",
							HTML: "获取数据失败，请检测您的网络链接是否已断开！"
						})
					}))
				}, 500)
			}
		}()), e.on("click", "a", function(a) {
			a && a.stopPropagation ? a.stopPropagation() : window.event.cancelBubble = !0, c(function() {
				e.find(".left .search_re_wrap").hide(), e.find(".search").show().find(".text").val("").end().find("span").hide()
			})
		}), e.find(".left span").on("click", function(b) {
			b && b.stopPropagation ? b.stopPropagation() : window.event.cancelBubble = !0;
			var d = a(this);
			c(function() {
				d.hide(), f.val("")
			})
		}), a("#show_more").find("a.btn1").on("click", function() {
			return a.ajax({
				data: {
					cid: $data_bak.parameters.cid,
					offset: $data_bak.next_parameters.offset,
					limit: 10,
					query: $data_bak.parameters.query,
					started: $data_bak.parameters.started,
					hasTA: $data_bak.parameters.hasTA,
					org: $data_bak.parameters.org
				}
			}).done(function(a) {
				if ($data_bak = a, a.data.length) {
					for (var b = "", c = 0, d = a.data.length; d > c; c++) b += '<li class="cf image_scale"> <div class="img fl"> <div class="cover"><a href="' + a.data[c].href + '" title="点击查看" target="_blank">点击查看</a></div> <img src="' + a.data[c].thumbnail + '" alt="' + a.data[c].name + '" title="' + a.data[c].name + '" /> </div> <div class="fl center"> <p class="name">' + (a.data[c].staff_title || "") + "&nbsp;&nbsp;" + (a.data[c].staff_name || "") + '</p> <h3><a href="' + a.data[c].href + '" title="' + a.data[c].name + '" target="_blank">' + a.data[c].name + "&nbsp;&nbsp;<span>" + a.data[c].org + "&nbsp;" + a.data[c].course_num + '</span></a></h3> <p class="txt">' + a.data[c].subtitle + "</p> </div>", "edx" == a.data[c].owner.toLowerCase() ? b += '<div class="right_edx fl"> <p>由edX联盟高校提供</p> </div></li>' : (a.data[c].serialized < 0 ? b += '<div class="right fl"><p class="green">即将开课</p> <p class="updata">更新于 ' + a.data[c].modified + "</p>" : a.data[c].hasTA ? a.data[c].hasTA && null != a.data[c].serialized && (b += '<div class="right fl"><p class="orange">连载至第' + a.data[c].serialized + '讲</p> <p class="updata">更新于 ' + a.data[c].modified + "</p>") : b += '<div class="right fl"><p>已完结</p> <p class="updata">更新于 ' + a.data[c].modified + "</p>", b += a.data[c].hasTA ? "<p><a>助教在线</a></p></div> </li>" : "</div></li>");
					i.append(b)
				}
				k.show(), a.next_parameters.offset ? (k.find(".btn2").hide(), k.find(".btn1").show().find("span").html(a.total - a.next_parameters.offset)) : a.next_parameters.cid ? (k.find(".btn1").hide(), k.find(".btn2").show().html("查看下一门课程：" + a.next_parameters.name)) : k.hide(), l = !1
			}).fail(function(b) {
				a.modalPlus(0 == b.readyState ? {
					type: "alert",
					color: "red",
					HTML: "上次的请求还未完结，请您稍等片刻再操作！"
				} : {
					type: "alert",
					color: "red",
					HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				})
			}), !1
		}), a("#show_more").find("a.btn2").on("click", function() {
			i.html("").addClass("list_style_bg"), k.hide(), a.ajax({
				data: {
					cid: $data_bak.next_parameters.cid,
					offset: 0,
					limit: 10,
					started: b("sx"),
					hasTA: b("zj")
				}
			}).done(function(a) {
				d(a), e.find(".left .search_re_wrap").hide(), e.find(".search").show().find(".text").val("").end().find("span").hide()
			}).fail(function(b) {
				a.modalPlus(0 == b.readyState ? {
					type: "alert",
					color: "red",
					HTML: "上次的请求还未完结，请您稍等片刻再操作！"
				} : {
					type: "alert",
					color: "red",
					HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				})
			})
		}), a("#find_other").on("click", function(a) {
			a && a.stopPropagation ? a.stopPropagation() : window.event.cancelBubble = !0, f.trigger("focus"), g.css("height", j)
		}), a("#sx").add("#zj").on("change", function() {
			i.html("").addClass("list_style_bg"), k.hide(), a.ajax({
				data: {
					cid: $data_bak.parameters.cid,
					offset: 0,
					limit: 10,
					query: $data_bak.parameters.query,
					started: b("sx"),
					hasTA: b("zj")
				}
			}).done(function(a) {
				d(a)
			}).fail(function(b) {
				a.modalPlus(0 == b.readyState ? {
					type: "alert",
					color: "red",
					HTML: "上次的请求还未完结，请您稍等片刻再操作！"
				} : {
					type: "alert",
					color: "red",
					HTML: "获取数据失败，请检测您的网络链接是否已断开！"
				})
			})
		}), -[1] || f[0].attachEvent("onpropertychange", function(a) {
			"value" == a.propertyName && f.trigger("input")
		})
	}) : !1
}), define("appSrc/include/index/vertical", ["jquery", "appCommon"], function(a, b) {
	return a("#js_xy_vertical").length ? void b(function() {
		var b = a("#nav"),
			c = b.find("li"),
			d = b.height(),
			e = b.offset().top,
			f = a(window),
			g = [],
			h = a("#article").find("section"),
			i = parseInt(h.eq(2).css("margin-top"));
		h.each(function(b) {
			var c = a(this);
			g[b] = 0 == b ? c.offset().top - 30 : c.offset().top + parseInt(d)
		}), b.on("click", "li", function() {
			var b = a(this);
			a("body").add("html").animate({
				scrollTop: g[b.index()] - d
			})
		}), f.on("scroll", function() {
			var h = f.scrollTop();
			h >= e ? b.addClass("scroll") : b.removeClass("scroll"), a.each(g, function(a, b) {
				h >= b - d - i && c.eq(a).addClass("on").siblings().removeClass("on")
			})
		})
	}) : !1
}), define("appSrc/include/index/retrievePwd", ["appCommon", "jquery", "ngCheckbox", "ngValidatePhoneNum", "ngVerificationBtn", "ngCommon", "ngMessages"], function(a, b, c, d, e) {
	return b("#js_xy_select_retrievePwd").length ? void a(function() {
		var a = angular.module("retrievePwd", ["xt", "ngMessages"]);
		a.controller("ctrl", ["$scope", "selectFormType", "ajax", "$window", function(a, c, d, e) {
			a.selectFormType = "email", c(a, "selectFormType"), a.validatePhoneNum = b("#phone_retrieve_form").data("phone_validate_url"), a.phoneCodeUrl = b("#py_header_data").data("phonecode"), a.phoneRetrieveSubmit = function() {
				d({
					url: b("#phone_retrieve_form").data("action_url"),
					data: b("#phone_retrieve_form").serialize(),
					type: "post",
					dataType: "json"
				}).then(function(b) {
					b.success ? e.location.href = b.next : a.phoneRetrieveMsg = b.value
				}, function(a, b) {
					console.error(a, b)
				})
			}
		}]), a.provider("selectFormType", function() {
			return {
				$get: function() {
					return function(a, b) {
						a.$watch(b, function(b) {
							"email" === b ? a.isEmailRegister = !0 : "phone" === b && (a.isEmailRegister = !1)
						})
					}
				}
			}
		}), a.directive("validatePhoneNum", d), a.directive("verificationBtn", e), a.directive("uiCheckbox", c), angular.bootstrap(document.getElementById("angular_bootstrap"), ["retrievePwd"])
	}) : !1
}), require(["appSrc/include/index/aboutUs", "appSrc/include/index/androidDownload", "appSrc/include/index/consociationSchool", "cs!appSrc/coffee/courseDetail", "appSrc/include/index/courseSearch", "appSrc/include/index/vertical", "appSrc/include/index/retrievePwd"]), define("appSrc/index", function() {}), function(a) {
	var b = document,
		c = "appendChild",
		d = "styleSheet",
		e = b.createElement("style");
	e.type = "text/css", b.getElementsByTagName("head")[0][c](e), e[d] ? e[d].cssText = a : e[c](b.createTextNode(a))
}('#alert_cover{background-color:rgba(0,0,0,.5);width:100%;height:100%;position:fixed;text-align:center;top:0;left:0;display:table;-webkit-animation:fade .3s;-moz-animation:fade .3s;animation:fade .3s;z-index:151;-webkit-transition:background-color .3s;-moz-transition:background-color .3s;transition:background-color .3s}#alert_cover .alert_cell{display:table-cell;vertical-align:middle}#alertM{display:inline-block;background:rgba(0,0,0,.3);border-radius:1%;transition-property:opacity,transform;-webkit-transition-property:opacity,-webkit-transform;-moz-transition-property:opacity,-moz-transform;-ms-transition-property:opacity,-ms-transform;-o-transition-property:opacity,-o-transform;transition-duration:.3s;-webkit-transition-duration:.3s;-moz-transition-duration:.3s;-o-transition-duration:.3s;-ms-transition-duration:.3s;-webkit-animation:show_in .3s;-ms-animation:show_in .3s;-moz-animation:show_in .3s;-o-animation:show_in .3s;animation:show_in .3s;padding:8px;text-align:left}.alertM_out{background-color:transparent!important}.alertM_out #alertM{-webkit-transform:scale(2)!important;-moz-transform:scale(2)!important;-o-transform:scale(2)!important;-ms-transform:scale(2)!important;transform:scale(2)!important;opacity:0!important}#alertM .alertM_bg{background:#fff}#alertM .succ .alertM_tip{background:url("http://www.xuetangx.com/static/images/alert/ok.png") no-repeat 20px center}#alertM .succ .alertM_tip p{color:#333;font-size:16px;padding:0 50px 0 70px;text-align:center}#alertM .err .alertM_tip{background:url("http://www.xuetangx.com/static/images/alert/fail.png") no-repeat 20px center}#alertM .err .alertM_tip p{color:#333;font-size:16px;padding:0 50px 0 70px;text-align:center}#alertM .h6{position:relative;min-height:50px}#alertM .h6 .alert_close{position:absolute;right:8px;top:8px;display:block;width:30px;height:30px;background:url("http://www.xuetangx.com/static/images/alert/close.png") no-repeat;cursor:pointer;transition:all .5s;-webkit-transition:all .5s;-o-transition:all .5s;-ms-transition:all .5s;-moz-transition:all .5s}#alertM .h6 .alert_close:hover{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}#alertM .succ .h6{margin:0;background:#4db59c}#alertM .err .h6{margin:0;background:#ff802b}#alertM .alertM_main{padding:0 40px}#alertM .alertM_bottom{padding:30px 0;text-align:center}#alertM .alertM_bottom button{display:inline-block;border:none;cursor:pointer;color:#fff;font-size:16px;padding:5px 10px;transition:all .3s;-webkit-transition:all .3s;-moz-transition:all .3s;-ms-transition:all .3s;-o-transition:all .3s}#alertM .succ .alertM_bottom button{background:#4db59c}#alertM .err .alertM_bottom button{background:#ff802b}#alertM .succ .alertM_bottom button:hover{background:#236051}#alertM .err .alertM_bottom button:hover{background:#b24b06}@-webkit-keyframes show_in{0%{-webkit-transform:scale(2);opacity:0}100%{-webkit-transform:scale(1);opacity:1}}@-moz-keyframes show_in{0%{-moz-transform:scale(2);opacity:0}100%{-moz-transform:scale(1);opacity:1}}@keyframes show_in{0%{-webkit-transform:scale(2);-moz-transform:scale(2);-ms-transform:scale(2);-o-transform:scale(2);transform:scale(2);opacity:0}100%{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}@-moz-keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}@keyframes fade{0%{background-color:transparent}100%{background-color:rgba(0,0,0,.5)}}#carousel,.carousel{width:100%;position:relative;overflow:hidden}#carousel img,.carousel img{max-width:100%;display:block;margin:0 auto}.carousel_move{transition-property:transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;-moz-transition-property:-moz-transform;-webkit-transition-property:-webkit-transform}.carousel_move:after,.carousel_move:before{content:\'\';display:table}.carousel_move:after{clear:both}.carousel_move .carousel_item{float:left}.carousel_fade{position:relative}.carousel_fade .carousel_item{transition-property:opacity;-o-transition-property:opacity;-ms-transition-property:opacity;-moz-transition-property:opacity;-webkit-transition-property:opacity;opacity:0;position:absolute;top:0;left:0;width:100%}.carousel_fade .carousel_item:first-child{opacity:1}.carousel_nav{position:absolute;bottom:2%;width:100%;z-index:3}.carousel_nav_center{text-align:center}.carousel_nav_right{text-align:right}.carousel_nav_left{text-align:left}.carousel_nav:after,.carousel_nav:before{content:\'\';display:table}.carousel_nav:after{clear:both}.carousel_nav li{transition:all .3s;-o-transition:all .3s;-ms-transition:all .3s;-moz-transition:all .3s;-webkit-transition:all .3s;display:inline-block;cursor:pointer}.carousel_nav_circle li{margin:0 1px;width:15px;height:15px;border-radius:50%;background:rgba(255,255,255,.5)}.carousel_nav_circle li.active{background:#fff}.carousel_direction_btn{position:absolute;top:50%;margin-top:-16px;width:32px;height:32px;display:block;cursor:pointer}@media (max-width:1099px){.carousel_responsive_direction_btn{position:absolute;top:50%;margin-top:-16px;width:32px;height:32px;display:block;cursor:pointer}}@media (min-width:1100px){.carousel_responsive_direction_btn{display:none}}.carousel_left_btn{background:url("//www.xuetangx.com/static/images/alert/banner_left.png") no-repeat 50% 50%/32px 32px;left:10px}.carousel_right_btn{background:url("//www.xuetangx.com/static/images/alert/banner_right.png") no-repeat 50% 50%/32px 32px;right:10px}@media (min-width:1100px){.carousel_nav_img li{position:relative;width:100px;margin:0 5px;height:55px;overflow:hidden;border:2px solid rgba(255,255,255,.5);box-sizing:border-box;-o-box-sizing:border-box;-ms-box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;opacity:.5}.carousel_nav_img li img{position:absolute;top:0;left:0}.carousel_nav_img li.active{border-color:#fff;transform:translate(0,-20%);-webkit-transform:translate(0,-20%);-moz-transform:translate(0,-20%);-o-transform:translate(0,-20%);-ms-transform:translate(0,-20%);opacity:1}}@media (max-width:1099px){.carousel_nav_img li{margin:0 5px;width:15px;height:15px;border-radius:50%;background:rgba(255,255,255,.5)}.carousel_nav_img li.active{background:#fff}.carousel_nav_img li img{display:none!important}}');