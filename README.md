# Laravel blade dosyalarından language file oluşturma
Blade dosyalarında ki '__' helperlarını bulup bunlar için dil dosyası içeriğini oluşturur.

Belli bir aşamaya gelmiş Laravel projenizi çok dilli yapıya taşımanız gerektiğinde, view lerinizin sayısına göre ciddi bir iş yükü ile karşılaşabilirsiniz. Bu eforu azaltmak için şöyle bir yöntem kullanılabilir. 

Blade dosyalarında geçen metinler, language helperı olan `{{ __('key') }}` şeklinde düzenlenir. View lerde geçen helperlar için, language dosyasında çevirileri key=>value şeklinde elle girmek yerine repodaki script ile view dosyanızı taratabilir ve geçen helperlar için çeviri array ınızı otomatik üretebilirsiniz.

