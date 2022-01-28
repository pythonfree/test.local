<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test.local</title>
    <link rel="stylesheet" href="./css/normalize.css?<?=rand(0, PHP_INT_MAX)?>">
    <link rel="stylesheet" href="./css/style.css?<?=rand(0, PHP_INT_MAX)?>">
</head>
<body>

<header>
    <button class="btn-cart" type="button">Корзина</button>
</header>

<main>
    <div class="products"></div>
</main>


<script>

    //ES6
    class Person {
        constructor(name, yearOfBirth) {
            this.name = name;
            this.yearOfBirth = yearOfBirth;
        }

        calcAge() {
            console.log(new Date().getFullYear() - this.yearOfBirth);
        }

        sayHi() {
            return `${this.name} says "Hi"!`;
        }
    }

    class Teacher extends Person {
        constructor(name, yearOfBirth, subject) {
            super(name, yearOfBirth);
            this.subject = subject;
        }

        static tripple(x) {
            if (x === undefined) {
                x = 2;
            }
            return x * 3;
        }

        sayHi() {
            return `${super.sayHi()} to students`;
        }
    }

    let john = new Person('John', 1984);
    let ann = new Teacher('Ann', 1998, 'Math');

    console.log(Teacher.tripple(4));


    //ES5
    // function Person(name, yearOfBirth) {
    //     this.name = name;
    //     this.yearOfBirth = yearOfBirth;
    // }
    // Person.prototype.calcAge = function () {
    //     console.log(new Date().getFullYear() - this.yearOfBirth);
    // }
    //
    // function Teacher(name, yearOfBirth, subject) {
    //     Person.call(this, name, yearOfBirth);
    //     this.subject = subject;
    // }
    // Teacher.prototype = Object.create(Person.prototype);
    // Teacher.prototype.constructor = Teacher;
    //
    // var john = new Person('John', 1984);
    // var ann = new Teacher('Ann', 1998, 'Math');
    //
    // console.log(john);
    // console.log(ann);
</script>


</body>
</html>