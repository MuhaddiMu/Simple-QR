# Simple QR Scanner & Generator PHP

Generate and Scan QR Code in just single line of code with php. This script use the third party API(goqr).

## Installation

All you have to do is clone the repository in your project's folder.
``` shell
git clone https://github.com/MuhaddiMu/Simple-QR.git
```

## Usage

```php
require_once('QR.php');

//Generating QR Code
QRgen("My QR Data");

//Scanning QR Code(Image)
QRscan("URL Path to image goes here");
```

Note: In QR Generating by default size of QR Image is 75x75.
In Scanning QR Code from image make sure your image is not on localhost it wouldn't work on it.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
***
Coded by :heart: [Muhaddis](http://www.Muhaddis.Info) 
