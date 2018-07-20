# Composer Esasları

Bu rehberde, örnek bir compose pakedinin yapılışını aşamalar halinde anlatmak yerinde, composer'in ne işe yaradığı ve nasıl çalıştığından bahsetmek istiyorum.

Composer'in temel 2 fonksiyonu bulunur. Bunlar:

- Autoloading
- Dependency Management

**Autoloading** Adından da anlaşılabileceği gibi, autoloading bir şeylerin otomatik olarak yüklenmesi anlamına gelir. Composer bağlamında bu PHP dosyalarının otomatik yüklenmesi (require) anlamına gelir. Projenizde herhangi bir yerde, bir PHP dosyası içerisindeki bir class veya fonksiyona erişmek istediğinizde, composer'in autoloading özelliği bu dosyayı belirli kuralları sağlaması halinde otomatik olarak require edebilir.

**Dependency Management** Composer, projenizin bağımlılıklarını ve hatta bu bağımlılıkların bağımlılıklarını ve onların da bağımlılıklarını yönetir. Projeniz X bir pakete ihtiyaç duyduğunda bu paketi yüklemeden evvel, paketin bağımlılıklarını ve bu bağımlılıkların da bağımlılıkları çözer ve tüm paketlerin en uygun çalışabileceği şekilde bağımlılıkları tespit eder ve yükler.

# Autoload nasıl çalışır?

Öncalikle, composer.json dosyası hakkında bir bilgi vermek yerinde olur. Bir composer paketinin bütün tanımları bu dosya içerisinde tanımlanır. Paket hakkında meta data içermesi haricinde, en önemli iki bölümü bulunur. Bunlar **autoload** ve **require** kısmıdır. Autoload, php dosyalarının nasıl yükleneceğini tanımlar. Require ise composer paketinin bağımlılıklarını tanımlar.

Composer'in autoload özelliğinin tetiklenmesi için öncelikle projenizde herhangi bir PHP dosyasında, composer paketinin içerisinde bulunan bir fonksiyonun veya class'ın çağrılması gerekir. Örneğin:

`$gurmePizza = new GurmePizza();`

Gibi bir kod çalıştırıldığında, PHP yorumlayıcısı, yorumladığı PHP dosyası ve require/include edilen PHP dosyalarında `GurmePizza` class'ını arayacaktır. Eğer bulursa bu sınıftan bir class örneği oluşturacaktır ancak bulamadığı takdirde, PHP yorumlayıcısı, `GurmePizza` class'ının bulunduğu PHP dosyasını bulup yükleyecek bir fonksiyonu çağırır. Varsayılan olarak bu fonksiyon tanımlı değildir. Composer, bu fonksiyonu bizim için tanımlar. (vendor/composer/autoload_real.php)

Bu fonksiyon çalıştığında, istenilen fonksiyon veya class'ın hangi dosyada bulunduğunu öğrenmek için `composer install` işlemi sırasında oluşturulan tanım dosyalarına bakar. Bu dosyalarda "x class -> y dosyasında" gibi bir tanım bulunur. Böylelikle composer, autoloading işlemini gerçekleştirir.

Bu tanım dosyalarının oluşması için composer.json içerisindeki **autoload** bölümü anahtar rol oynar. PSR0 veya PSR4 standartlarına göre, hangi namespace'deki class'ların dosyalarının nerede olduğu tanımlıdır. Böylece composer, kurulum sırasında bu dosyaları kontrol edip class tanım dosyalarını oluşturur.
