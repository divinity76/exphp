# exphp
exceptional error handling in php

Traditionally, you'd have to write something like
```php 
if(strlen($data)!==($written=file_put_contents('file',$data))){
  throw new RuntimeException('tried to write '.strlen($data).
  ' bytes to file, but could only write '.var_export($written,true).' bytes!');
}
```
to detect errors.. with exphp.php , you can just do
```php
ex::file_put_contents('file',$data);
```
instead. a RuntimeException will be thrown if any errors were detected.
