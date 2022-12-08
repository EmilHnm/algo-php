# algo-php

Người thực hiện: [Ngô Minh Hòa](https://github.com/EmilRailgun)

## OOP

&nbsp;OOP viết tắt của Object-Oriented Programming – Lập trình hướng đối tượng ra đời giải quyết các vấn đề mà lập trình truyền thống gặp phải. Lập trình hướng đối tượng không chỉ đơn giản là các cú pháp, câu lệnh mới mà còn là một cách tư duy mới khi giải quyết một vấn đề. Thực tế khi làm một việc gì đó, chúng ta sẽ quan tâm đến hai điều: vật bị tác động và hành động. Với lập trình cũng vậy, nếu chúng ta tập trung vào hành động thì đó là lập trình hướng thủ tục còn nếu tập trung vào các vật thể thì đó là lập trình hướng đối tượng. Với cả hai cách giải quyết vấn đề, đều cho chúng ta một kết quả như nhau, chỉ có một điều khác nhau là cách chúng ta tập trung vào cái gì?

&nbsp;Trong lập trình hướng đối tượng OOP, có hai thuật ngữ rất quan trọng là lớp (class) và đối tượng (object). Class là định nghĩa chung cho một vật, để dễ tưởng tượng bạn có thể nghĩ đến class là một bản thiết kế trong khi đó đối tượng là một thực hiện cụ thể của bản thiết kế. Ví dụ, object là một ngôi nhà cụ thể thì class là bản thiết kế ngôi nhà đó. Lập trình hướng đối tượng là cách bạn thiết kế các class và sau đó thực hiện chúng thành các đối tượng trong chương trình khi cần.

&nbsp;Lập trình hướng đối tượng có 4 tính chất chính:

- Tính trìu tượng (abstraction).
- Tính kế thừa (inheritance).
- Tính đóng gói (encapsulation).
- Tính đa hình (polymorphism).

## SOLID

<strong>SOLID</strong> là viết tắt của 5 quy tắc thiết kế trong Hướng đối tượng nhằm giúp thiết kế hệ thống dễ bảo trì, mở rộng và tái sử dụng. Các quy tắc này được đặt tên theo chữ cái đầu của mỗi quy tắc.

- <strong>S</strong>: Single responsibility principle (SRP) - Nguyên lý đơn nhiệm - Mỗi lớp chỉ nên chịu 1 trách nhiệm cụ thể.
- <strong>O</strong>: Open/closed principle (OCP) - Nguyên lý mở/đóng - Thay vì chính sửa một lớp có sẵn, ưu tiên mở rộng nó.
- <strong>L</strong>: Liskov substitution principle (LSP) - Nguyên lý thay thế Liskov - Lớp con phải có khả năng thay thế lớp cha.
- <strong>I</strong>: Interface segregation principle (ISP) - Nguyên lý phân chia giao diện - Thay vì dùng 1 interface lớn, hay chia nó thành nhiều interface nhỏ.
- <strong>D</strong>: Dependency inversion principle (DIP) - Nguyên lý đảo ngược phụ thuộc.

## Functional Programming

<strong>Functional Programming</strong> nghĩa là “lập trình hàm” hay còn được gọi là “lập trình chức năng”. Đây là một phương pháp xây dựng phần mềm bằng cách tạo ra các chức năng, dựa trên các hàm toán học. Các hàm này có thể được gọi lại, truyền vào nhau, và được sử dụng để xây dựng các chức năng khác. Các hàm này không có trạng thái, không có biến toàn cục, và không có biến đối số. Các hàm này không thay đổi các đối số của nó, và không có các hiệu ứng phụ.

Đặc điểm:

- Đây là phương pháp lập trình chú trọng kết quả, chứ không phải quá trình. Nó nhấn mạnh vào những gì sẽ được tính toán.
- Dữ liệu là bất biến, không thể thay đổi.
- Phương pháp này biến các vấn đề cần giải quyết thành những chức năng.
- Nó được xây dựng dựa trên khái niệm về các hàm toán học. Cụ thể, nó sử dụng các biểu thức điều kiện và đệ quy để thực hiện phép tính.
- Nó không hỗ trợ việc lặp lại, như các câu lệnh lặp và câu lệnh điều kiện If-Else.

Minh họa

```javascript
// Imperative
const numbers = [1, 2, 3, 4, 5];
const sumAll = (list) => {
  let sum = 0;
  for (let i = 0; i < list.length; i++) {
    sum += list[i];
  }
  return sum;
};
```

## Magic Methods

Là các phương thức đặc biệt được định nghĩa sẵn trong PHP, có khả năng ghi đè lên phương thưc mặc định của PHP khi một số hành động nhất định được thực hiện trên đối tượng.

- `__construct()`: Hàm được gọi khi đối tượng được khởi tạo
- `__destruct()`: Hàm được gọi khi đối tượng bị hủy hoặc hết kịch bản.
- `__call()` và `__callStatic()`: Hàm đưọc gọi khi đối tượng truy cập đến phương thức không tồn tại. Nhận hai tham số: $method và $parameter tương ứng là tên phuong thức và mảng tham số đựọc truyền vào.
- `__set()`: Hàm được gọi khi ta truyền dữ liệu vào thuộc tính không tồn taị hoặc private.
- `__get()`: Tự động gọi khi ta truy cập vào thuộc tính không tồn tại hoặc Private.
  `__isset()`: Hàm được gọi khi chúng ta thực hiện kiểm tra xem 1 phương thức có tồn tại hay không hay truy cập vào thuộc tính không được truy cập .Cụ thể là isset() hay empty().(Không áp dụng cho thuộc tính tĩnh )
- `__unset()`: Hàm này đưược gọi khi unset() 1 thuộc tính không đưọc truy cập .
- `__toString()`: Hàm này được gọi khi echo 1 đối tượng.`__toString()` bắt buộc trả về 1 chuỗi.
- `__invoke()`: Hàm này được gọi khi ta cố gắng gọi đối tượng như 1 hàm.
- `__sleep()`: Đưọc gọi khi serilize 1 đối tượng. Thường khi serilize 1 đối tượng, nó sẽ trả về hết các thuộc tính. Nhưng `__sleep()` sẽ quy định các thuộc tính được trả về.
- `__wakeup()` : được gọi khi unserilize 1 đối tượng.
- `__set_state()`: được dùng khi chúng ta var_export() một đối tượng.
- `__clone()`: Được gọi khi chúng ta clone (sao chép 1 đối tượng thành đối tượng mới không liên quan đến đối tượng cũ ).
- `__debugInfo()`: được gọi khi var_dump một đối tượng

## `call_user_func()`

`call_user_func()` là một hàm sẵn có trong PHP được sử dụng để gọi hàm gọi lại được cung cấp bởi tham số đầu tiên và chuyển các tham số còn lại làm đối số. Nó được sử dụng để gọi các hàm do người dùng định nghĩa.

### Cú pháp

```php
call_user_func ( $function_name[, mixed $value1[, mixed $... ]])
```

### Ví dụ

```php
<?php
function foo($arg_1, $arg_2, $arg_3) {
    echo "Example function.\n";
    return $arg_1 + $arg_2 + $arg_3;
}

// Call the function with 3 arguments
call_user_func('foo', 1, 2, 3); // prints "Example function."

// Call the function with 2 arguments
call_user_func('foo', 1, 2); // prints "Example function."

// Call the function with 1 argument
call_user_func('foo', 1); // prints "Example function."

// Call the function with no arguments
call_user_func('foo'); // prints "Example function."
?>
```

## Autoload

<strong>Autoload</strong> cho phép load các class mà không cần phải include hoặc require nó. Nó sẽ tự động load class khi chúng ta khởi tạo đối tượng của class đó. Để sử dụng autoload, chúng ta cần phải đăng ký một hàm autoload với hàm `spl_autoload_register()`.

### Ví dụ

```php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
  $path = '/path/to/class/';

  include $path.$className.'.php';
}

//-------------------------------------

$myClass = new MyClass();
```

### `__autoload()`

`__autoload()` là một hàm được gọi tự động khi chúng ta khởi tạo đối tượng của một class mà chưa được include hoặc require. Nó sẽ tự động load class đó.

Ví dụ:

```php
<?php

{
    $filename = __DIR__ . '/classes/' . $classname . '.php';
    include $filename;
}
?>
```

### `spl_autoload_register()`

```php
<?php
bool spl_autoload_register ([callable $autoload_function [, bool $throw = TRUE [, bool $prepend = FALSE ]]])
?>
```

Khác với `__autoload()`, `spl_autoload_register()` cho phép chúng ta đăng ký nhiều hàm autoload. Nó sẽ gọi các hàm autoload theo thứ tự đăng ký.

Ví dụ:

```php
<?php
/*function __autoload($classname)
{
    $filename = __DIR__ . '/classes/' . $classname . '.php';
    include $filename;
}*/

spl_autoload_register(function ($classname)  {
    $filename = __DIR__ . '/classes/' . $classname . '.php';
    include $filename;
});

$foo = new Foo;
$bar = new Bar;

```
