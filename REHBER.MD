# Composer Esasları

Bu rehberde, örnek bir compose pakedinin yapılışını aşamalar halinde anlatmak yerinde, composer'in ne işe yaradığı ve nasıl çalıştığından bahsetmek istiyorum.

Composer'in temel 2 fonksiyonu bulunur. Bunlar:

- Autoloading
- Dependency Management

*Autoloading* Adından da anlaşılabileceği gibi, autoloading bir şeylerin otomatik olarak yüklenmesi anlamına gelir. Composer bağlamında bu PHP dosyalarının otomatik yüklenmesi (require) anlamına gelir. Projenizde herhangi bir yerde, bir PHP dosyası içerisindeki bir class veya fonksiyona erişmek istediğinizde, composer'in autoloading özelliği bu dosyayı belirli kuralları sağlaması halinde otomatik olarak require edebilir.

*Dependency Management* Composer, projenizin bağımlılıklarını ve hatta bu bağımlılıkların bağımlılıklarını ve onların da bağımlılıklarını yönetir. Projeniz X bir pakete ihtiyaç duyduğunda bu paketi yüklemeden evvel, paketin bağımlılıklarını ve bu bağımlılıkların da bağımlılıkları çözer ve tüm paketlerin en uygun çalışabileceği şekilde bağımlılıkları tespit eder ve yükler.
