// assets/js/city.js - İl ve İlçe Yönetimi

const iller = [
    "01 - Adana", "02 - Adıyaman", "03 - Afyonkarahisar", "04 - Ağrı", "05 - Amasya",
    "06 - Ankara", "07 - Antalya", "08 - Artvin", "09 - Aydın", "10 - Balıkesir",
    "11 - Bilecik", "12 - Bingöl", "13 - Bitlis", "14 - Bolu", "15 - Burdur",
    "16 - Bursa", "17 - Çanakkale", "18 - Çankırı", "19 - Çorum", "20 - Denizli",
    "21 - Diyarbakır", "22 - Edirne", "23 - Elazığ", "24 - Erzincan", "25 - Erzurum",
    "26 - Eskişehir", "27 - Gaziantep", "28 - Giresun", "29 - Gümüşhane", "30 - Hakkari",
    "31 - Hatay", "32 - Isparta", "33 - Mersin", "34 - İstanbul", "35 - İzmir",
    "36 - Kars", "37 - Kastamonu", "38 - Kayseri", "39 - Kırklareli", "40 - Kırşehir",
    "41 - Kocaeli", "42 - Konya", "43 - Kütahya", "44 - Malatya", "45 - Manisa",
    "46 - Kahramanmaraş", "47 - Mardin", "48 - Muğla", "49 - Muş", "50 - Nevşehir",
    "51 - Niğde", "52 - Ordu", "53 - Rize", "54 - Sakarya", "55 - Samsun",
    "56 - Siirt", "57 - Sinop", "58 - Sivas", "59 - Tekirdağ", "60 - Tokat",
    "61 - Trabzon", "62 - Tunceli", "63 - Şanlıurfa", "64 - Uşak", "65 - Van",
    "66 - Yozgat", "67 - Zonguldak", "68 - Aksaray", "69 - Bayburt", "70 - Karaman",
    "71 - Kırıkkale", "72 - Batman", "73 - Şırnak", "74 - Bartın", "75 - Ardahan",
    "76 - Iğdır", "77 - Yalova", "78 - Karabük", "79 - Kilis", "80 - Osmaniye",
    "81 - Düzce"
];

class CityManager {
    constructor() {
        this.iller = iller;
    }

    // İlleri select'e doldur
    fillIller(selectId) {
        const ilSelect = document.getElementById(selectId);
        if (!ilSelect) {
            console.error(`Select element with id '${selectId}' not found`);
            return;
        }

        // Mevcut seçenekleri temizle (ilk seçenek hariç)
        while (ilSelect.options.length > 1) {
            ilSelect.remove(1);
        }

        this.iller.forEach(il => {
            const option = document.createElement('option');
            const [plaka, ilAdi] = il.split(' - ');
            option.value = plaka;
            option.textContent = il;
            option.setAttribute('data-search', ilAdi.toLowerCase());
            ilSelect.appendChild(option);
        });

        console.log(`${this.iller.length} il yüklendi`);
    }

    // İl arama kutusu ekle
    setupIlArama(selectId) {
        const ilSelect = document.getElementById(selectId);
        if (!ilSelect) return;

        // Arama kutusu zaten varsa çık
        if (document.getElementById(`${selectId}Arama`)) return;

        const aramaDiv = document.createElement('div');
        aramaDiv.className = 'position-relative mb-2';
        
        aramaDiv.innerHTML = `
            <input type="text" 
                   id="${selectId}Arama" 
                   class="form-control form-control-sm border-radius-0" 
                   placeholder="İl ara..."
                   style="padding: 8px 12px;">
            <i class="fas fa-search position-absolute" 
               style="right: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
        `;
        
        ilSelect.parentNode.insertBefore(aramaDiv, ilSelect);
        
        // Arama fonksiyonelliği
        this.setupSelectArama(selectId, `${selectId}Arama`);
    }

    // Select arama fonksiyonelliği
    setupSelectArama(selectId, aramaInputId) {
        const select = document.getElementById(selectId);
        const aramaInput = document.getElementById(aramaInputId);

        if (aramaInput && select) {
            aramaInput.addEventListener('input', (e) => {
                this.filterSelectOptions(selectId, e.target.value);
            });
        }
    }

    // Select seçeneklerini filtrele
    filterSelectOptions(selectId, searchTerm) {
        const select = document.getElementById(selectId);
        const options = select.querySelectorAll('option');
        const searchLower = searchTerm.toLowerCase();

        let visibleCount = 0;

        options.forEach(option => {
            if (option.value === '') {
                option.style.display = searchTerm ? 'none' : '';
                return;
            }

            const searchText = option.getAttribute('data-search') || option.textContent.toLowerCase();
            if (searchText.includes(searchLower)) {
                option.style.display = '';
                visibleCount++;
            } else {
                option.style.display = 'none';
            }
        });

        // Eğer hiç sonuç yoksa mesaj göster
        if (visibleCount === 0 && searchTerm) {
            this.showNoResultsMessage(selectId);
        } else {
            this.hideNoResultsMessage(selectId);
        }
    }

    // Sonuç bulunamadı mesajı
    showNoResultsMessage(selectId) {
        this.hideNoResultsMessage(selectId);
        
        const select = document.getElementById(selectId);
        const message = document.createElement('div');
        message.id = `${selectId}NoResults`;
        message.className = 'text-muted small p-2 text-center';
        message.textContent = 'Sonuç bulunamadı';
        
        select.parentNode.insertBefore(message, select.nextSibling);
    }

    hideNoResultsMessage(selectId) {
        const existingMessage = document.getElementById(`${selectId}NoResults`);
        if (existingMessage) {
            existingMessage.remove();
        }
    }

    // Varsayılan il ayarla
    setDefaultIl(selectId, plakaKodu) {
        const select = document.getElementById(selectId);
        if (select) {
            select.value = plakaKodu;
        }
    }
}

// Global instance
const cityManager = new CityManager();