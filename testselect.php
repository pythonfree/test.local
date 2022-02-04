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
    <script data-skip-moving>

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


        class DateList {
            constructor(dateList = '#dateList') {
                this.dateList = dateList;
                this.dateIntervals = [];
                this.allProducts = [];
                this._fetchProducts();
                this._render();
            }
            _fetchProducts() {
                this.dateIntervals = deliveryTime;
            }
            _render() {
                const dateList = document.querySelector(this.dateList);

                for (let item of this.dateIntervals) {
                    const dateObject = new DateItem(item);
                    this.allProducts.push(dateObject);
                    dateList.insertAdjacentHTML('beforeend', dateObject.render())
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

        const list = new DateList();
        console.log(list);


        // const renderDate = item => `<option value="${item.date.value}">${item.date.text}</option>`;
        // const renderDates = list => document.querySelector('#dateList')
        //     .insertAdjacentHTML('beforeend', list.map(item => renderDate(item)).join(''));
        // renderDates(deliveryTime);
        //
        // const firstTimes = deliveryTime[0]['time'];
        // const renderTime = (item) => `<option value="${item.value}">${item.text}</option>`;
        // const renderTimes = list => document.querySelector('#timeList')
        //     .insertAdjacentHTML('beforeend', list.map((item) => renderTime(item)).join(''));
        // renderTimes(firstTimes);
        //
        //
        // const timeList = document.querySelector('#timeList');
        // const ORDER_PROP_8 = document.querySelector('#ORDER_PROP_8');
        // ORDER_PROP_8.value = deliveryTime[0].time[0].value;
        // timeList.addEventListener('change', () => {
        //     ORDER_PROP_8.value = timeList.value;
        // });
        //
        // const dateList = document.querySelector('#dateList');
        // const ORDER_PROP_7 = document.querySelector('#ORDER_PROP_7');
        // ORDER_PROP_7.value = deliveryTime[0].date.value;
        // dateList.addEventListener('change', () => {
        //     ORDER_PROP_7.value = dateList.value;
        // });


    </script>
</div>
</body>
</html>
