<?php

// Membuat Validation Framework

// Buat Attribute
#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank
{
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    var int $min;
    var int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

// Tambahkan Attribute ke Property
class LoginRequest
{
    #[Length(min: 5, max: 10)]
    #[NotBlank]
    public ?string $username;

    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}

// Validasi input object LoginRequest
function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

// Ambil Detail dari Attribute menggunkan Reflection dari Attribute NotBalank
function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object))
            throw new Exception("Property $property->name is null");
        if ($property->getValue($object) == null)
            throw new Exception("Value $property->name is null");
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return;
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valuelength = strlen($value);
        if ($valuelength < $value->min) {
            throw new Exception("Property $property->name is too short");
        }
        if ($valuelength > $property->max) {
            throw new Exception("Property $property->name is too long");
        }
    }
}


$request = new LoginRequest();
$request->username = "iqbal";
$request->password = "12345678";
validate($request);
