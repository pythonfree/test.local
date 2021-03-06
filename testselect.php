<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <input
        type="hidden"
        name="ORDER_PROP_7"
        id="ORDER_PROP_7"
        value=""
        data-delivery-day>
    <select id="dateList"></select>
    <input
        type="hidden"
        name="ORDER_PROP_8"
        id="ORDER_PROP_8"
        value=""
        data-delivery-time>
    <select id="timeList"></select>

    <script>

        const deliveryTime = [
            {
                "date": {
                    "value": "05.02.2022",
                    "text": "Завтра, 5 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "06.02.2022",
                    "text": "Воскресенье, 6 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "07.02.2022",
                    "text": "Понедельник, 7 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "19:00-22:00",
                        "text": "19:00 - 22:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "08.02.2022",
                    "text": "Вторник, 8 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "19:00-22:00",
                        "text": "19:00 - 22:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "09.02.2022",
                    "text": "Среда, 9 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "19:00-22:00",
                        "text": "19:00 - 22:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "10.02.2022",
                    "text": "Четверг, 10 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "19:00-22:00",
                        "text": "19:00 - 22:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            },
            {
                "date": {
                    "value": "11.02.2022",
                    "text": "Пятница, 11 Февраля"
                },
                "time": [
                    {
                        "value": "10:00-13:00",
                        "text": "10:00 - 13:00"
                    },
                    {
                        "value": "13:00-16:00",
                        "text": "13:00 - 16:00"
                    },
                    {
                        "value": "16:00-19:00",
                        "text": "16:00 - 19:00"
                    },
                    {
                        "value": "19:00-22:00",
                        "text": "19:00 - 22:00"
                    },
                    {
                        "value": "10:00-18:00",
                        "text": "10:00 - 18:00"
                    }
                ]
            }
        ];
        console.log(deliveryTime);

        class Input {
            constructor(selector, value) {
                this.input = document.querySelector(selector);
                this.input.value = value;
            }
        }

        class TimeInput extends Input {}

        class DateInput extends Input {}

        class TimeSelect {
            constructor(selector, timeItems) {
                this.timeSelect = document.querySelector(selector);
                this._renderForOneDate(timeItems);
            }

            _renderForOneDate(timeItems) {
               this.timeSelect.innerHTML = "";
                for (let timeItem of timeItems) {
                    this.timeSelect.insertAdjacentHTML(
                        'beforeend', `<option value="${timeItem.value}">${timeItem.text}</option>`);
                }
            }
        }

        class DateList {
            constructor(dateSelect = '#dateList',
                        timeSelect = '#timeList',
                        inputForDate  = '#ORDER_PROP_7',
                        inputForTime = '#ORDER_PROP_8') {
                this.inputForDate = inputForDate;
                this.inputForTime = inputForTime;
                this.dateSelect = dateSelect;
                this.timeSelect = timeSelect;
                this.dateIntervals = [];
                this._fetchProducts();
                this._init();
                this._render();
            }

            _fetchProducts() {
                this.dateIntervals = deliveryTime;
            }

            _init() {
                new DateInput(this.inputForDate, this.dateIntervals[0].date.value);
                new TimeInput(this.inputForTime, this.dateIntervals[0].time[0].value);
                new TimeSelect(this.timeSelect, this.dateIntervals[0].time);

                document.querySelector(this.dateSelect).addEventListener('change', (e) => {
                    this.showIntervals(e.target.value);
                });

                document.querySelector(this.timeSelect).addEventListener('change', (e) => {
                    new TimeInput(this.inputForTime, e.target.value);
                });

            }

            _render() {
                const dateSelect = document.querySelector(this.dateSelect);

                for (let item of this.dateIntervals) {
                    const dateObject = new DateItem(item);
                    dateSelect.insertAdjacentHTML('beforeend', dateObject.render());
                }
            }

            showIntervals(value) {
                new DateInput(this.inputForDate, value);

                for (let item of this.dateIntervals) {
                    const dateObject = new DateItem(item);

                    if (dateObject.dateValue === value) {
                        new TimeInput(this.inputForTime, dateObject.timeIntervals[0].value);
                        new TimeSelect(this.timeSelect,dateObject.timeIntervals);
                        break;
                    }
                }
            }
        }

        class DateItem {
            constructor(item) {
                this.dateText = item.date.text;
                this.dateValue = item.date.value;
                this.timeIntervals = item.time;
            }

            render() {
                return `<option value="${this.dateValue}">${this.dateText}</option>`;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new DateList();
        });

    </script>
</div>
</body>
</html>