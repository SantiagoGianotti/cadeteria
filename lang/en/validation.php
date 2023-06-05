<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El campo :attribute debe ser un URL valido.',
    'after' => 'El campo :attribute debe ser una fecha antes de :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha antes o despues de :date.',
    'alpha' => 'El campo :attribute solo puede contener letras.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, numeros, guiones, y guion bajos.',
    'alpha_num' => 'El campo :attribute solo puede contener letras y numeros.',
    'array' => 'El campo :attribute debe ser un arreglo.',
    'ascii' => 'El campo :attribute solo puede contener caracteres de un solo byte.',
    'before' => 'El campo :attribute debe ser una fecha despues de :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha despues o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max items.',
        'file' => 'El campo :attribute field debe estar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute field debe estar entre :min y :max.',
        'string' => 'El campo :attribute field debe estar entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo :attribute de confirmación debe coincidir.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute debe ser una fecha valida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute debe coincidir con el formato :format.',
    'decimal' => 'El campo :attribute debe tener :decimal decimales.',
    'declined' => 'El campo :attribute debe ser rechazado.',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'El campo :attribute y :other deben ser distintos.',
    'digits' => 'El campo :attribute debe tener :digits digitos.',
    'digits_between' => 'El campo :attribute debe tener entre :min y :max digitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones invalidas de imagen.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los siguientes valores: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe empezar con uno de los siguientes valores: :values.',
    'email' => 'El campo :attribute debe ser un email valido.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes valores: :values.',
    'enum' => 'El campo :attribute es invalido.',
    'exists' => 'El campo :attribute es invalido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo :attribute debe tener mas de :value items.',
        'file' => 'El campo :attribute debe tener mas de :value kilobytes.',
        'numeric' => 'El campo :attribute debe tener mas de :value.',
        'string' => 'El campo :attribute debe tener mas de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value items o mas.',
        'file' => 'El campo :attribute debe ser mayor o igual a :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'string' => 'El campo :attribute debe ser mayor o igual a :value caracteres.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo :attribute es invalido.',
    'in_array' => 'El campo :attribute debe existir en :other.',
    'integer' => 'El campo :attribute debe ser un entero.',
    'ip' => 'El campo :attribute debe ser una direccion IP valida.',
    'ipv4' => 'El campo :attribute debe ser una direccion IPv4 valida.',
    'ipv6' => 'El campo :attribute debe ser una direccion IPv6 valida.',
    'json' => 'El campo :attribute debe ser un JSON valido.',
    'lowercase' => 'El campo :attribute debe estar en minusculas.',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos que :value items.',
        'file' => 'El campo :attribute debe tener menos que :value kilobytes.',
        'numeric' => 'El campo :attribute debe tener menos que :value.',
        'string' => 'El campo :attribute debe tener menos que :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe tener menos o igual que :value items.',
        'file' => 'El campo :attribute debe ser menor o igual a :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'string' => 'El campo :attribute debe ser menor o igual a :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC valida.',
    'max' => [
        'array' => 'El campo :attribute no debe tener mas que :max items.',
        'file' => 'El campo :attribute no debe ser mayor a :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'string' => 'El campo :attribute no debe ser mayor a :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute no debe tener mas que :max digitos.',
    'mimes' => 'El campo :attribute debe ser del tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser del tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener por lo menos :min items.',
        'file' => 'El campo :attribute debe tener por lo menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe tener por lo menos :min.',
        'string' => 'El campo :attribute debe tener por lo menos :min caracteres.',
    ],
    'min_digits' => 'El campo :attribute debe tener por lo menos :min digitos.',
    'missing' => 'El campo :attribute no debe ser rellenado.',
    'missing_if' => 'El campo :attribute no debe ser rellenado :other sea :value.',
    'missing_unless' => 'El campo :attribute no debe ser rellenado a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute no debe ser rellenado si :values esta presente.',
    'missing_with_all' => 'El campo :attribute no debe ser rellenado si :values esta presente.',
    'multiple_of' => 'El campo :attribute no puede ser multiplo de :value.',
    'not_in' => 'El campo :attribute es invalido.',
    'not_regex' => 'El campo :attribute es invalido.',
    'numeric' => 'El campo :attribute debe ser un numero.',
    'password' => [
        'letters' => 'El campo :attribute debe contener por lo menos una letra.',
        'mixed' => 'El campo :attribute debe contener por lo menos una letra Mayuscula y una minuscula.',
        'numbers' => 'El campo :attribute debe contener por lo menos un numero.',
        'symbols' => 'El campo :attribute debe contener por lo menos un simbolo.',
        'uncompromised' => 'El valor :attribute aparecio en una fuga de datos. Elija un valor distinto a :attribute.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute debe estar prohibido.',
    'prohibited_if' => 'El campo :attribute esta prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute esta prohibido a menos que :other este en :values.',
    'prohibits' => 'El campo :attribute prohibe que :other este presente.',
    'regex' => 'El campo :attribute posee un formato invalido.',
    'required' => 'El campo :attribute es requerido.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es requerido cuando :other es aceptado.',
    'required_unless' => 'El campo :attribute field es required a menos que :other esta en :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values es present.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values estan presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no estan presentes.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values estan presentes.',
    'same' => 'El campo :attribute debe coincidir con :other.',
    'size' => [
        'array' => 'El campo :attribute debe contener :size items.',
        'file' => 'El campo :attribute debe tener :size kilobytes.',
        'numeric' => 'El campo :attribute debe tener :size.',
        'string' => 'El campo :attribute debe tener :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe empezar con uno de los siguientes valores: :values.',
    'string' => 'El campo :attribute debe contener una cadena de caracteres.',
    'timezone' => 'El campo :attribute debe contener un huso horario valido.',
    'unique' => 'El campo :attribute ya esta usado.',
    'uploaded' => 'El campo :attribute fallo en subirse.',
    'uppercase' => 'El campo :attribute debe ser una mayusculas.',
    'url' => 'El campo :attribute debe ser un URL valido.',
    'ulid' => 'El campo :attribute debe ser un ULID valido.',
    'uuid' => 'El campo :attribute debe ser un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
