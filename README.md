# Singleton

# Example
```php
class Example
{
    use Hail\Singleton\SingletonTrait;
    
    private $var;
    
    protected function init(): void
    {
        $this->var = 0;
    }
}

$example = Example::getInstance();
```
