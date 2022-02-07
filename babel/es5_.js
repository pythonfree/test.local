"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var deliveryTime = [{
    "date": {
        "value": "05.02.2022",
        "text": "Завтра, 5 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "06.02.2022",
        "text": "Воскресенье, 6 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "07.02.2022",
        "text": "Понедельник, 7 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "19:00-22:00",
        "text": "19:00 - 22:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "08.02.2022",
        "text": "Вторник, 8 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "19:00-22:00",
        "text": "19:00 - 22:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "09.02.2022",
        "text": "Среда, 9 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "19:00-22:00",
        "text": "19:00 - 22:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "10.02.2022",
        "text": "Четверг, 10 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "19:00-22:00",
        "text": "19:00 - 22:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}, {
    "date": {
        "value": "11.02.2022",
        "text": "Пятница, 11 Февраля"
    },
    "time": [{
        "value": "10:00-13:00",
        "text": "10:00 - 13:00"
    }, {
        "value": "13:00-16:00",
        "text": "13:00 - 16:00"
    }, {
        "value": "16:00-19:00",
        "text": "16:00 - 19:00"
    }, {
        "value": "19:00-22:00",
        "text": "19:00 - 22:00"
    }, {
        "value": "10:00-18:00",
        "text": "10:00 - 18:00"
    }]
}];

var Input = function Input(selector, value) {
    _classCallCheck(this, Input);

    this.input = document.querySelector(selector);
    this.input.value = value;
};

var TimeInput = function (_Input) {
    _inherits(TimeInput, _Input);

    function TimeInput() {
        _classCallCheck(this, TimeInput);

        return _possibleConstructorReturn(this, (TimeInput.__proto__ || Object.getPrototypeOf(TimeInput)).apply(this, arguments));
    }

    return TimeInput;
}(Input);

var DateInput = function (_Input2) {
    _inherits(DateInput, _Input2);

    function DateInput() {
        _classCallCheck(this, DateInput);

        return _possibleConstructorReturn(this, (DateInput.__proto__ || Object.getPrototypeOf(DateInput)).apply(this, arguments));
    }

    return DateInput;
}(Input);

var TimeSelect = function () {
    function TimeSelect(selector, timeItems) {
        _classCallCheck(this, TimeSelect);

        this.timeSelect = document.querySelector(selector);
        this._renderForOneDate(timeItems);
    }

    _createClass(TimeSelect, [{
        key: "_renderForOneDate",
        value: function _renderForOneDate(timeItems) {
            this.timeSelect.innerHTML = "";
            var _iteratorNormalCompletion = true;
            var _didIteratorError = false;
            var _iteratorError = undefined;

            try {
                for (var _iterator = timeItems[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                    var timeItem = _step.value;

                    this.timeSelect.insertAdjacentHTML('beforeend', "<option value=\"" + timeItem.value + "\">\n                        " + timeItem.text + "</option>");
                }
            } catch (err) {
                _didIteratorError = true;
                _iteratorError = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion && _iterator.return) {
                        _iterator.return();
                    }
                } finally {
                    if (_didIteratorError) {
                        throw _iteratorError;
                    }
                }
            }
        }
    }]);

    return TimeSelect;
}();

var DateList = function () {
    function DateList() {
        var dateSelect = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '#dateList';
        var timeSelect = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '#timeList';
        var inputForDate = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '#ORDER_PROP_7';
        var inputForTime = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : '#ORDER_PROP_8';

        _classCallCheck(this, DateList);

        this.inputForDate = inputForDate;
        this.inputForTime = inputForTime;
        this.dateSelect = dateSelect;
        this.timeSelect = timeSelect;
        this.dateIntervals = [];
        this._fetchProducts();
        this._init();
        this._render();
    }

    _createClass(DateList, [{
        key: "_fetchProducts",
        value: function _fetchProducts() {
            this.dateIntervals = deliveryTime;
            console.log(deliveryTime);
        }
    }, {
        key: "_init",
        value: function _init() {
            var _this3 = this;

            new DateInput(this.inputForDate, this.dateIntervals[0].date.value);
            new TimeInput(this.inputForTime, this.dateIntervals[0].time[0].value);
            new TimeSelect(this.timeSelect, this.dateIntervals[0].time);

            document.querySelector(this.dateSelect).addEventListener('change', function (e) {
                _this3.showIntervals(e.target.value);
            });

            document.querySelector(this.timeSelect).addEventListener('change', function (e) {
                new TimeInput(_this3.inputForTime, e.target.value);
            });
        }
    }, {
        key: "_render",
        value: function _render() {
            var dateSelect = document.querySelector(this.dateSelect);

            var _iteratorNormalCompletion2 = true;
            var _didIteratorError2 = false;
            var _iteratorError2 = undefined;

            try {
                for (var _iterator2 = this.dateIntervals[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                    var item = _step2.value;

                    var dateObject = new DateItem(item);
                    dateSelect.insertAdjacentHTML('beforeend', dateObject.render());
                }
            } catch (err) {
                _didIteratorError2 = true;
                _iteratorError2 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion2 && _iterator2.return) {
                        _iterator2.return();
                    }
                } finally {
                    if (_didIteratorError2) {
                        throw _iteratorError2;
                    }
                }
            }
        }
    }, {
        key: "showIntervals",
        value: function showIntervals(value) {
            new DateInput(this.inputForDate, value);

            var _iteratorNormalCompletion3 = true;
            var _didIteratorError3 = false;
            var _iteratorError3 = undefined;

            try {
                for (var _iterator3 = this.dateIntervals[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
                    var item = _step3.value;

                    var dateObject = new DateItem(item);

                    if (dateObject.dateValue === value) {
                        new TimeInput(this.inputForTime, dateObject.timeIntervals[0].value);
                        new TimeSelect(this.timeSelect, dateObject.timeIntervals);
                        break;
                    }
                }
            } catch (err) {
                _didIteratorError3 = true;
                _iteratorError3 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion3 && _iterator3.return) {
                        _iterator3.return();
                    }
                } finally {
                    if (_didIteratorError3) {
                        throw _iteratorError3;
                    }
                }
            }
        }
    }]);

    return DateList;
}();

var DateItem = function () {
    function DateItem(item) {
        _classCallCheck(this, DateItem);

        this.dateText = item.date.text;
        this.dateValue = item.date.value;
        this.timeIntervals = item.time;
    }

    _createClass(DateItem, [{
        key: "render",
        value: function render() {
            return "<option value=\"" + this.dateValue + "\">" + this.dateText + "</option>";
        }
    }]);

    return DateItem;
}();

document.addEventListener('DOMContentLoaded', function () {
    new DateList();
});
