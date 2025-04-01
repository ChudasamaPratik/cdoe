<?php


return [
    'disable' => env('CAPTCHA_DISABLE', false),
    'characters' => ['2', '3', '4', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'm', 'n', 'p', 'q', 'r', 't', 'u', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'M', 'N', 'P', 'Q', 'R', 'T', 'U', 'X', 'Y', 'Z'],
    'default' => [
        'length' => 2,
        'width' => 120,
        'height' => 36,
        'quality' => 120,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,
        'lines' => 0,
        'bgColor' => '#fff',
        'fontColors' => ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
        'contrast' => -50,
    ],
    'math' => [
        'length' => 9,             // Reduce to 5 characters for clarity and simplicity
        'width' => 180,            // Increased width for better spacing between characters
        'height' => 60,            // Slightly increase height for a larger CAPTCHA image
        'quality' => 100,          // Set quality to a good level for better resolution
        'math' => true,            // Math challenge enabled
        'lines' => 0,              // Disable lines for a cleaner CAPTCHA
        'angle' => 0,              // Keep angle 0 for upright characters (no tilt)
        'fontSize' => 28,          // Increase font size for better readability
        'bgColor' => '#f0f8ff',    // Light background color (soft, light blue for a clean look)
        'fontColors' => ['#2c3e50', '#16a085', '#303f9f', '#f57c00'], // Darker text colors for visibility
        'contrast' => 15,          // Increase contrast for clearer text visibility
    ],

    'flat' => [
        'length' => 6,
        'width' => 160,
        'height' => 46,
        'quality' => 90,
        'lines' => 6,
        'bgImage' => false,
        'bgColor' => '#ecf2f4',
        'fontColors' => ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
        'contrast' => -5,
    ],
    'mini' => [
        'length' => 3,
        'width' => 180,            // Increased width for better spacing between characters
        'height' => 60,            // Slightly increase height for a larger CAPTCHA image
        'lines' => 0,              // Disable lines for a cleaner CAPTCHA
        'angle' => 0,              // Keep angle 0 for upright characters (no tilt)
        'fontSize' => 28,          // Increase font size for better readability
        'bgColor' => '#f0f8ff',    // Light background color (soft, light blue for a clean look)
        'fontColors' => ['#2c3e50', '#16a085', '#303f9f', '#f57c00'], // Darker text colors for visibility
        'contrast' => 15,          // Increase contrast for clearer text visibility
    ],
    'inverse' => [
        'length' => 2,
        'width' => 120,
        'height' => 36,
        'quality' => 900,
        'sensitive' => true,
        'angle' => 0,
        'sharpen' => 10,
        'blur' => 0,
        'invert' => true,
        'contrast' => 0,
        'line' => 0
    ]
];
