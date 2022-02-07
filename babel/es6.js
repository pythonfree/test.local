
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
                'beforeend', `<option value="${timeItem.value}">
                        ${timeItem.text}</option>`);
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