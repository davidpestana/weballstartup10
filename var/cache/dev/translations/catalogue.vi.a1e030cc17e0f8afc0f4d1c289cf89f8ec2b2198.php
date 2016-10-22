<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Giá trị này phải là sai.',
    'This value should be true.' => 'Giá trị này phải là đúng.',
    'This value should be of type {{ type }}.' => 'Giá trị này phải là kiểu  {{ type }}.',
    'This value should be blank.' => 'Giá trị này phải rỗng.',
    'The value you selected is not a valid choice.' => 'Giá trị bạn vừa chọn không hợp lệ.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Bạn phải chọn ít nhất {{ limit }} lựa chọn.|Bạn phải chọn ít nhất {{ limit }} lựa chọn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Bạn phải chọn nhiều nhất {{ limit }} lựa chọn.|Bạn phải chọn nhiều  nhất {{ limit }} lựa chọn.',
    'One or more of the given values is invalid.' => 'Một hoặc nhiều giá trị được chọn không hợp lệ.',
    'This field was not expected.' => 'Lĩnh vực này không được dự kiến.',
    'This field is missing.' => 'Lĩnh vực này là mất tích.',
    'This value is not a valid date.' => 'Giá trị không phải là ngày hợp lệ.',
    'This value is not a valid datetime.' => 'Giá trị không phải là ngày tháng hợp lệ.',
    'This value is not a valid email address.' => 'Giá trị này không phải là email hợp lệ.',
    'The file could not be found.' => 'Tập tin không tìm thấy.',
    'The file is not readable.' => 'Tập tin không thể đọc được.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn ({{ size }} {{ suffix }}). Kích thước tối đa cho phép {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Kiểu mime của tập tin không hợp lệ ({{ type }}). Kiểu hợp lệ là {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Giá trị phải bằng hoặc nhỏ hơn {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.|Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.',
    'This value should be {{ limit }} or more.' => 'Giá trị phải lớn hơn hoặc bằng {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.|Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.',
    'This value should not be blank.' => 'Giá trị không được phép để trống.',
    'This value should not be null.' => 'Giá trị không được phép rỗng.',
    'This value should be null.' => 'Giá trị phải rỗng.',
    'This value is not valid.' => 'Giá trị không hợp lệ.',
    'This value is not a valid time.' => 'Giá trị không phải là thời gian hợp lệ.',
    'This value is not a valid URL.' => 'Giá trị không phải là địa chỉ URL hợp lệ.',
    'The two values should be equal.' => 'Hai giá trị phải bằng nhau.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn. Kích thước tối đa cho phép là {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tập tin quá lớn.',
    'The file could not be uploaded.' => 'Tập tin không thể tải lên.',
    'This value should be a valid number.' => 'Giá trị phải là con số.',
    'This file is not a valid image.' => 'Tập tin không phải là hình ảnh.',
    'This is not a valid IP address.' => 'Địa chỉ IP không hợp lệ.',
    'This value is not a valid language.' => 'Giá trị không phải là ngôn ngữ hợp lệ.',
    'This value is not a valid locale.' => 'Giá trị không phải là một bản địa địa phương hợp lệ.',
    'This value is not a valid country.' => 'Giá trị không phải là nước hợp lệ.',
    'This value is already used.' => 'Giá trị đã được sử dụng.',
    'The size of the image could not be detected.' => 'Kích thước của hình ảnh không thể xác định.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Chiều rộng của hình quá lớn ({{ width }}px). Chiều rộng tối đa phải là {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Chiều rộng của hình quá thấp ({{ width }}px). Chiều rộng tối thiểu phải là {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Chiều cao của hình quá cao ({{ height }}px). Chiều cao tối đa phải là {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Chiều cao của hình quá thấp ({{ height }}px). Chiều cao tối thiểu phải là {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Giá trị này phải là mật khẩu hiện tại của người dùng.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Giá trị phải có chính xác {{ limit }} kí tự.|Giá trị phải có chính xác {{ limit }} kí tự.',
    'The file was only partially uploaded.' => 'Tập tin chỉ được tải lên một phần.',
    'No file was uploaded.' => 'Tập tin không được tải lên.',
    'No temporary folder was configured in php.ini.' => 'Thư mục tạm không được định nghĩa trong php.ini.',
    'Cannot write temporary file to disk.' => 'Không thể ghi tập tin tạm ra đĩa.',
    'A PHP extension caused the upload to fail.' => 'Một PHP extension đã phá hỏng quá trình tải lên của tập tin.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Danh sách phải chứa chính xác {{ limit }} thành phần.|Danh sách phải chứa chính xác {{ limit }} thành phần.',
    'Invalid card number.' => 'Số thẻ không hợp lệ.',
    'Unsupported card type or invalid card number.' => 'Thẻ không được hỗ trợ hoặc số thẻ không hợp lệ.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Giá trị không phải là International Bank Account Number (IBAN) hợp lệ.',
    'This value is not a valid ISBN-10.' => 'Giá trị không phải là ISBN-10 hợp lệ.',
    'This value is not a valid ISBN-13.' => 'Giá trị không phải là ISBN-13 hợp lệ.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Giá trị không phải là ISBN-10 hoặc ISBN-13 hợp lệ.',
    'This value is not a valid ISSN.' => 'Giá trị không là ISSN hợp lệ.',
    'This value is not a valid currency.' => 'Giá trị không phải là đơn vi tiền tệ hợp lệ.',
    'This value should be equal to {{ compared_value }}.' => 'Giá trị phải bằng {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Giá trị phải lớn hơn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Giá trị phải lớn hơn hoặc bằng {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị phải giống  {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Giá trị phải bé hơn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Giá trị không được phép nhỏ hơn hoặc bằng {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Giá trị không được phép bằng {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị không được phép giống như {{ compared_value_type }} {{ compared_value }}.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Có lỗi trong quá trình xác thực.',
    'Authentication credentials could not be found.' => 'Thông tin dùng để xác thực không tìm thấy.',
    'Authentication request could not be processed due to a system problem.' => 'Yêu cầu xác thực không thể thực hiện do lỗi của hệ thống.',
    'Invalid credentials.' => 'Thông tin dùng để xác thực không hợp lệ.',
    'Cookie has already been used by someone else.' => 'Cookie đã được dùng bởi người dùng khác.',
    'Not privileged to request the resource.' => 'Không được phép yêu cầu tài nguyên.',
    'Invalid CSRF token.' => 'Mã CSRF không hợp lệ.',
    'Digest nonce has expired.' => 'Mã dùng một lần đã hết hạn.',
    'No authentication provider found to support the authentication token.' => 'Không tìm thấy nhà cung cấp dịch vụ xác thực nào cho mã xác thực mà bạn sử dụng.',
    'No session available, it either timed out or cookies are not enabled.' => 'Không tìm thấy phiên làm việc. Phiên làm việc hoặc cookie có thể bị tắt.',
    'No token could be found.' => 'Không tìm thấy mã token.',
    'Username could not be found.' => 'Không tìm thấy tên người dùng username.',
    'Account has expired.' => 'Tài khoản đã hết hạn.',
    'Credentials have expired.' => 'Thông tin xác thực đã hết hạn.',
    'Account is disabled.' => 'Tài khoản bị tạm ngừng.',
    'Account is locked.' => 'Tài khoản bị khóa.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Agregar nuevo',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'Este archivo se puede encontrar en',
    'label_type_equals' => 'igual a',
    'label_type_not_equals' => 'diferente a',
    'date_range_start' => 'Fecha inicial',
    'date_range_end' => 'Fecha final',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'negro',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'azul',
    'blueviolet' => 'blueviolet',
    'brown' => 'marrón',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'verde',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'naranja',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'rosa',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'púrpura',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'rojo',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'blanco',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'amarillo',
    'yellowgreen' => 'yellowgreen',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administración',
    'action_delete' => 'Borrar',
    'btn_batch' => 'OK',
    'btn_create' => 'Crear',
    'btn_create_and_edit_again' => 'Crear y editar',
    'btn_create_and_create_a_new_one' => 'Crear y agregar otro',
    'btn_create_and_return_to_list' => 'Crear y regresar al listado',
    'btn_filter' => 'Filtrar',
    'btn_advanced_filters' => 'Filtros avanzados',
    'btn_update' => 'Actualizar',
    'btn_update_and_edit_again' => 'Actualizar',
    'btn_update_and_return_to_list' => 'Actualizar y cerrar',
    'link_delete' => 'Borrar',
    'link_action_create' => 'Agregar nuevo',
    'link_action_list' => 'Volver a la lista',
    'link_action_show' => 'Mostrar',
    'link_action_edit' => 'Editar',
    'link_add' => 'Agregar nuevo',
    'link_list' => 'Listar',
    'link_reset_filter' => 'Restablecer',
    'title_create' => 'Crear',
    'title_dashboard' => 'Panel principal',
    'title_edit' => 'Editar "%name%"',
    'title_list' => 'Listar',
    'link_next_pager' => 'Siguiente',
    'link_previous_pager' => 'Anterior',
    'link_first_pager' => 'Primero',
    'link_last_pager' => 'Último',
    'Admin' => 'Administrador',
    'link_expand' => 'expandir/ocultar',
    'no_result' => 'No hay resultados',
    'confirm_msg' => '¿Está seguro?',
    'action_edit' => 'Editar',
    'action_show' => 'Mostrar',
    'all_elements' => 'Todos los elementos',
    'flash_batch_empty' => 'Acción cancelada. Ningún item seleccionado.',
    'flash_create_success' => 'Elemento creado satisfactoriamente.',
    'flash_create_error' => 'Se ha producido un error durante la creación del elemento.',
    'flash_edit_success' => 'Elemento actualizado satisfactoriamente.',
    'flash_edit_error' => 'Se ha producido un error durante la actualización del elemento.',
    'flash_lock_error' => 'flash_lock_error',
    'flash_batch_delete_success' => 'Los elementos seleccionados fueron eliminados satisfactoriamente.',
    'flash_batch_delete_error' => 'Se ha producido un error durante la eliminación de los elementos seleccionados.',
    'flash_delete_error' => 'Se ha producido un error durante la eliminación del elemento.',
    'flash_delete_success' => 'Elemento eliminado satisfactoriamente.',
    'form_not_available' => 'form_not_available',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirmar borrado',
    'message_delete_confirmation' => '¿Está seguro de que quiere borrar el elemento seleccionado "%object%"?',
    'btn_delete' => 'Sí, borrar',
    'title_batch_confirmation' => 'Confirme la operación "%action%"',
    'message_batch_confirmation' => '¿Está seguro de que quiere confirmar y ejecutar esta acción para el elemento seleccionado?|¿Está seguro que quiere confirmar y ejecutar esta acción para todos los %count% elementos seleccionados?',
    'message_batch_all_confirmation' => '¿Está seguro de que quiere confirmar y ejecutar esta acción para todos los elementos?',
    'btn_execute_batch_action' => 'Sí, ejecutar',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'label_type_contains' => 'contiene',
    'label_type_not_contains' => 'no contiene',
    'label_type_equals' => 'es igual a',
    'label_type_not_equals' => 'no es igual a',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'está vacío',
    'label_date_type_not_null' => 'no está vacío',
    'label_date_type_between' => 'entre',
    'label_date_type_not_between' => 'no entre',
    'label_filters' => 'Filtros',
    'delete_or' => 'o',
    'link_action_history' => 'Revisiones',
    'td_action' => 'Acción',
    'td_compare' => 'td_compare',
    'td_revision' => 'Revisiones',
    'td_timestamp' => 'Fecha',
    'td_username' => 'Autor',
    'td_role' => 'Rol',
    'label_view_revision' => 'Ver Revisión',
    'label_compare_revision' => 'label_compare_revision',
    'list_results_count_prefix' => 'al menos',
    'list_results_count' => '1 resultado|%count% resultados',
    'label_export_download' => 'Exportar',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Cargando información...',
    'btn_preview' => 'Vista preliminar',
    'btn_preview_approve' => 'Aprobar',
    'btn_preview_decline' => 'Cancelar',
    'label_per_page' => 'Por página',
    'list_select' => 'Seleccionar',
    'confirm_exit' => 'Tienes cambios sin guardar.',
    'link_edit_acl' => 'Editar ACL',
    'btn_update_acl' => 'Actualizar ACL',
    'flash_acl_edit_success' => 'ACL actualizada correctamente.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ninguna selección',
    'title_search_results' => 'Resultados de la búsqueda: %query%',
    'search_placeholder' => 'Buscar',
    'no_results_found' => 'No se han encontrado resultados',
    'add_new_entry' => 'añadir nueva entrada',
    'link_actions' => 'Acciones',
    'noscript_warning' => 'Su navegador no soporta JavaScript o se encuentra deshabilitado  Algunas características no funcionarán correctamente.',
    'message_form_group_empty' => 'No hay campos disponibles.',
    'link_filters' => 'Filtros',
    'stats_view_more' => 'Ver más',
    'title_select_subclass' => 'title_select_subclass',
    'no_subclass_available' => 'no_subclass_available',
    'label_unknown_user' => 'label_unknown_user',
  ),
  'messages' => 
  array (
    '_steps_title' => '___steps_title',
    '_steps_1' => '___steps_1',
    '_steps_2' => '___steps_2',
    '_steps_3' => '___steps_3',
    '_steps_4' => '___steps_4',
    '_welcome_slide1_title' => 'Transformamos la forma de buscar empleo',
    '_welcome_slide1_parragraph' => NULL,
    '_welcome_slide1_cta' => '___welcome_slide1_cta',
    '_welcome_slide2_title' => 'Cansado de Formate gratis para una oferta de trabajo ',
    '_welcome_slide2_parragraph' => 'Y accede a unaentrevista con laempresa tras la formación
',
    '_welcome_slide2_cta' => '___welcome_slide2_cta',
    '_welcome_slide3_title' => 'Séla persona que tu empresa está buscando',
    '_welcome_slide3_parragraph' => '___welcome_slide3_parragraph',
    '_welcome_slide3_cta' => '___welcome_slide3_cta',
    '_target_title' => '___target_title',
    '_target_parragraph' => '___target_parragraph',
    '_reviews_title' => '___reviews_title',
    '_reviews_phototitle_1' => '___reviews_phototitle_1',
    '_reviews_parragraph1' => '___reviews_parragraph1',
    '_reviews_author1_name' => '___reviews_author1_name',
    '_reviews_author1_reference' => '___reviews_author1_reference',
    '_reviews_phototitle_2' => '___reviews_phototitle_2',
    '_reviews_parragraph2' => '___reviews_parragraph2',
    '_reviews_author2_name' => '___reviews_author2_name',
    '_reviews_author2_reference' => '___reviews_author2_reference',
    '_functions_title1' => '___functions_title1',
    '_functions_1' => '___functions_1',
    '_functions_title2' => '___functions_title2',
    '_functions_2' => '___functions_2',
    '_functions_title3' => '___functions_title3',
    '_functions_3' => '___functions_3',
    '_functions_title4' => '___functions_title4',
    '_functions_4' => '___functions_4',
    '_services_left_totitle' => '___services_left_totitle',
    '_services_left_title' => '___services_left_title',
    '_services_left_parragraph' => '___services_left_parragraph',
    '_services_center_totitle' => '___services_center_totitle',
    '_services_center_title' => '___services_center_title',
    '_services_center_parragraph' => '___services_center_parragraph',
    '_services_right_totitle' => '___services_right_totitle',
    '_services_right_title' => '___services_right_title',
    '_services_right_parragraph' => '___services_right_parragraph',
    '_carrierinfo_title' => '___carrierinfo_title',
    '_carrierinfo_subtitle' => '___carrierinfo_subtitle',
    '_carrierinfo_left1_title' => '___carrierinfo_left1_title',
    '_carrierinfo_left1_parragraph' => '___carrierinfo_left1_parragraph',
    '_carrierinfo_left2_title' => '___carrierinfo_left2_title',
    '_carrierinfo_left2_parragraph' => '___carrierinfo_left2_parragraph',
    '_carrierinfo_left3_title' => '___carrierinfo_left3_title',
    '_carrierinfo_left3_parragraph' => '___carrierinfo_left3_parragraph',
    '_carrierinfo_cta' => '___carrierinfo_cta',
    '_carrierinfo_right1_title' => '___carrierinfo_right1_title',
    '_carrierinfo_right1_parragraph' => '___carrierinfo_right1_parragraph',
    '_carrierinfo_right2_title' => '___carrierinfo_right2_title',
    '_carrierinfo_right2_parragraph' => '___carrierinfo_right2_parragraph',
    '_carrierinfo_right3_title' => '___carrierinfo_right3_title',
    '_carrierinfo_right3_parragraph' => '___carrierinfo_right3_parragraph',
    '_home_title' => '___home_title',
    '_menu_home' => '___menu_home',
    '_menu_services' => '___menu_services',
    '_menu_functions' => '___menu_functions',
    '_menu_transport' => '___menu_transport',
    '_menu_knowmore' => '___menu_knowmore',
    '_signin' => '___signin',
    '_signup' => '___signup',
    '_footer_sendmessage' => '___footer_sendmessage',
    '_footer_sendmessage_button' => '___footer_sendmessage_button',
    '_lead_form_title' => '___lead_form_title',
    '_lead_form_subtitle' => '___lead_form_subtitle',
    '_lead_form_button' => '___lead_form_button',
    '_lead_form_thankyou_title' => '___lead_form_thankyou_title',
    '_lead_form_thankyou_parragrahp' => '___lead_form_thankyou_parragrahp',
    '_leadrecruiter_form_title' => '___leadrecruiter_form_title',
    '_leadrecruiter_form_subtitle' => '___leadrecruiter_form_subtitle',
    '_leadrecruiter_form_thankyou_title' => '___leadrecruiter_form_thankyou_title',
    '_leadrecruiter_form_thankyou_parragrahp' => '___leadrecruiter_form_thankyou_parragrahp',
    '_footer_left_parragraph' => '___footer_left_parragraph',
    '_footer_copyright' => '___footer_copyright',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
