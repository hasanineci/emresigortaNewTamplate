// assets/js/car-model.js - Araç Marka/Model Yönetimi

// TSB Kasko Değer Listesi - Tam Veri Seti
const tsbAracVerileri = {
    "ACURA": ["ILX", "MDX", "RDX", "RLX", "TLX"],
    "ALFA ROMEO": ["4C", "GIULIA", "GIULIETTA", "STELVIO", "TONALE"],
    "AUDI": ["A1", "A3", "A4", "A5", "A6", "A7", "A8", "E-TRON", "Q2", "Q3", "Q4", "Q5", "Q7", "Q8", "R8", "RS3", "RS4", "RS5", "RS6", "RS7", "RS Q8", "S3", "S4", "S5", "S6", "S7", "S8", "SQ2", "SQ5", "SQ7", "SQ8", "TT"],
    "BMW": ["1 SERIES", "2 SERIES", "3 SERIES", "4 SERIES", "5 SERIES", "6 SERIES", "7 SERIES", "8 SERIES", "I3", "I4", "I8", "IX", "IX3", "M2", "M3", "M4", "M5", "M8", "X1", "X2", "X3", "X4", "X5", "X6", "X7", "Z4"],
    "CHEVROLET": ["AVEO", "CAMARO", "CAPTIVA", "CORVETTE", "CRUZE", "EQUINOX", "EXPRESS", "IMPALA", "MALIBU", "ORLANDO", "SILVERADO", "SPARK", "SUBURBAN", "TAHOE", "TRAILBLAZER", "TRAVERSE", "TRAX"],
    "CITROEN": ["BERLINGO", "C-ELYSEE", "C1", "C3", "C3 AIR", "C3 AIRCROSS", "C4", "C4 CACTUS", "C4 PICASSO", "C5", "C5 AIRCROSS", "C5 X", "C8", "DS3", "DS4", "DS5", "DS7", "DS9", "JUMPER", "JUMPY", "NEMO", "SPACETOURER"],
    "DACIA": ["DOKKER", "DUSTER", "JOGGER", "LODGY", "LOGAN", "SANDERO", "SPRING", "STEPWAY"],
    "FIAT": ["500", "500C", "500L", "500X", "ALBEA", "DOBLO", "EGEA", "FIORINO", "FREEMONT", "FULLBACK", "LINEA", "PALIO", "PANDA", "PUNTO", "QUBO", "SCUDO", "SEDICI", "TEMPRA", "TIPO", "ULYSSE"],
    "FORD": ["B-MAX", "C-MAX", "ECOSPORT", "EDGE", "ESCAPE", "EXPLORER", "FIESTA", "FOCUS", "FUSION", "GALAXY", "KA", "KUGA", "MONDEO", "MUSTANG", "PUMA", "RANGER", "S-MAX", "TOURNEO", "TRANSIT"],
    "HONDA": ["ACCORD", "CIVIC", "CR-V", "CR-Z", "HR-V", "INSIGHT", "JAZZ", "LEGEND"],
    "HYUNDAI": ["ACCENT", "ATOZ", "AZERA", "BAYON", "CELESTA", "COUPE", "ELANTRA", "GALLOPER", "GENESIS", "GETZ", "H-1", "I10", "I20", "I30", "I40", "IONIQ", "IX20", "IX35", "IX55", "KONA", "MATRIX", "SANTA FE", "SONATA", "STAREX", "TERRACAN", "TUCSON", "VELOSTER", "VERNA", "XG"],
    "KIA": ["CARENS", "CARNIVAL", "CEED", "CERATO", "EV6", "K5", "K7", "K8", "K9", "MAGENTIS", "MOHAVE", "NIRO", "OPIRUS", "OPTIMA", "PICANTO", "PROCEED", "RIO", "SEDONA", "SELTOS", "SORENTO", "SOUL", "SPORTAGE", "SPORTAGE (QL)", "STINGER", "STONIC", "VENGA", "XCEEED"],
    "MERCEDES-BENZ": ["A-CLASS", "AMG GT", "B-CLASS", "C-CLASS", "CLA", "CLS", "E-CLASS", "EQB", "EQC", "EQE", "EQS", "G-CLASS", "GL", "GLA", "GLB", "GLC", "GLE", "GLK", "GLS", "MB", "METRIS", "R-CLASS", "S-CLASS", "SL", "SLC", "SLK", "SLR", "SLS", "SPRINTER", "V-CLASS", "VANE", "VITO", "X-CLASS"],
    "NISSAN": ["350Z", "370Z", "ALMERA", "ALTIMA", "ARMADA", "CUBE", "FRONTIER", "GT-R", "JUKE", "KICKS", "LEAF", "MAXIMA", "MICRA", "MURANO", "NAVARA", "NOTE", "NP300", "PATHFINDER", "PATROL", "PULSAR", "QASHQAI", "QUEST", "ROGUE", "SENTRA", "SERENA", "SKYLINE", "SUNNY", "TEANA", "TERRANO", "TIIDA", "TITAN", "VERSA", "X-TRAIL", "Z"],
    "OPEL": ["ADAM", "AGILA", "AMPERA", "ANTARA", "ASTRA", "CASCADA", "COMBO", "CORSA", "CROSSLAND", "FRONTERA", "GRANDLAND", "INSIGNIA", "KARL", "MERIVA", "MOKKA", "MOVANO", "OMEGA", "SIGNUM", "TIGRA", "VECTRA", "VIVARO", "ZAFIRA"],
    "PEUGEOT": ["1007", "106", "107", "108", "2008", "205", "206", "207", "208", "3008", "301", "306", "307", "308", "309", "405", "406", "407", "5008", "508", "605", "607", "806", "807", "BIPPER", "BOXER", "EXPERT", "PARTNER", "RCZ", "RIFTER", "TRAVELLER"],
    "RENAULT": ["ARKANA", "CAPTUR", "CLIO", "ESPACE", "FLUENCE", "KADJAR", "KANGOO", "KOLEOS", "LAGUNA", "LATITUDE", "MEGANE", "MODUS", "SAFRANE", "SANDERO", "SCENIC", "TALISMAN", "THALIA", "TRAFIC", "TWINGO", "VEL SATIS", "WIND", "ZOE"],
    "SKODA": ["CITIGO", "FABIA", "KAMIQ", "KAROQ", "KODIAQ", "OCTAVIA", "RAPID", "ROOMSTER", "SCALA", "SUPERB", "YETI"],
    "TOYOTA": ["4RUNNER", "AURIS", "AVALON", "AVENSIS", "AYGO", "C-HR", "CAMRY", "CARINA", "CELICA", "COROLLA", "FJ CRUISER", "GT86", "HIGHLANDER", "HILUX", "IQ", "LAND CRUISER", "MR2", "PASEO", "PRIUS", "RAV4", "SEQUOIA", "SIENNA", "STARLET", "SUPRA", "TACOMA", "TUNDRA", "URBAN CRUISER", "VERSO", "YARIS"],
    "VOLKSWAGEN": ["AMAROK", "ARTEON", "BEETLE", "BORA", "CADDY", "CC", "CRAFTER", "EOS", "FOX", "GOLF", "ID.3", "ID.4", "ID.5", "ID.6", "ID.BUZZ", "JETTA", "LUPO", "MULTIVAN", "NEW BEETLE", "PASSAT", "PHAETON", "POLO", "SCIROCCO", "SHARAN", "TAOS", "T-CROSS", "T-ROC", "TIGUAN", "TOUAREG", "TOURAN", "TRANSPORTER", "UP", "VENTO"],
    "VOLVO": ["240", "340", "360", "440", "460", "480", "740", "760", "850", "940", "960", "C30", "C70", "S40", "S60", "S70", "S80", "S90", "V40", "V50", "V60", "V70", "V90", "XC40", "XC60", "XC70", "XC90"]
};

class CarModelManager {
    constructor() {
        this.markalar = Object.keys(tsbAracVerileri).sort();
        this.tumModeller = tsbAracVerileri;
        this.populerMarkalar = ['TOYOTA', 'VOLKSWAGEN', 'RENAULT', 'FIAT', 'FORD', 'HYUNDAI', 'HONDA'];
    }

    // Markaları select'e doldur
    fillMarkalar(selectId) {
        const markaSelect = document.getElementById(selectId);
        if (!markaSelect) {
            console.error(`Select element with id '${selectId}' not found`);
            return;
        }

        // Mevcut seçenekleri temizle (ilk seçenek hariç)
        while (markaSelect.options.length > 1) {
            markaSelect.remove(1);
        }

        this.markalar.forEach(marka => {
            const option = document.createElement('option');
            option.value = marka;
            option.textContent = this.isPopulerMarka(marka) ? `⭐ ${marka}` : marka;
            option.setAttribute('data-search', marka.toLowerCase());
            markaSelect.appendChild(option);
        });

        console.log(`${this.markalar.length} marka yüklendi`);
    }

    // Popüler marka kontrolü
    isPopulerMarka(marka) {
        return this.populerMarkalar.includes(marka);
    }

    // Marka arama kutusu ekle
    setupMarkaArama(selectId) {
        const markaSelect = document.getElementById(selectId);
        if (!markaSelect) return;

        if (document.getElementById(`${selectId}Arama`)) return;

        const aramaDiv = document.createElement('div');
        aramaDiv.className = 'position-relative mb-2';
        
        aramaDiv.innerHTML = `
            <input type="text" 
                   id="${selectId}Arama" 
                   class="form-control form-control-sm border-radius-0" 
                   placeholder="Marka ara..."
                   style="padding: 8px 12px;">
            <i class="fas fa-search position-absolute" 
               style="right: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
        `;
        
        markaSelect.parentNode.insertBefore(aramaDiv, markaSelect);
        
        // Arama fonksiyonelliği
        cityManager.setupSelectArama(selectId, `${selectId}Arama`);
    }

    // Araç tiplerini yükle
    loadAracTipleri(marka, tipSelectId) {
        const tipSelect = document.getElementById(tipSelectId);
        if (!tipSelect) return;
        
        // Yükleme durumunu göster
        tipSelect.innerHTML = '<option value="">Araç tipi yükleniyor...</option>';
        tipSelect.disabled = true;

        // Simüle edilmiş yükleme
        setTimeout(() => {
            this.fillAracTipleri(marka, tipSelectId);
        }, 300);
    }

    // Araç tiplerini doldur
    fillAracTipleri(marka, tipSelectId) {
        const tipSelect = document.getElementById(tipSelectId);
        if (!tipSelect) return;

        tipSelect.innerHTML = '<option value="">Araç tipi seçiniz</option>';
        tipSelect.disabled = false;

        if (marka && this.tumModeller[marka]) {
            const modeller = this.tumModeller[marka];
            
            modeller.forEach(tip => {
                const option = document.createElement('option');
                option.value = tip;
                option.textContent = tip;
                option.setAttribute('data-search', tip.toLowerCase());
                tipSelect.appendChild(option);
            });

            // Model arama kutusu ekle
            this.setupModelArama(tipSelectId);
            
            console.log(`${modeller.length} model yüklendi: ${marka}`);
        }
    }

    // Model arama kutusu ekle
    setupModelArama(selectId) {
        if (document.getElementById(`${selectId}Arama`)) return;

        const aramaDiv = document.createElement('div');
        aramaDiv.className = 'position-relative mb-2';
        aramaDiv.innerHTML = `
            <input type="text" 
                   id="${selectId}Arama" 
                   class="form-control form-control-sm border-radius-0" 
                   placeholder="Model ara..."
                   style="padding: 8px 12px;">
            <i class="fas fa-search position-absolute" 
               style="right: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
        `;
        
        const tipSelect = document.getElementById(selectId);
        tipSelect.parentNode.insertBefore(aramaDiv, tipSelect);
        
        // Arama fonksiyonelliği
        const aramaInput = document.getElementById(`${selectId}Arama`);
        if (aramaInput) {
            aramaInput.addEventListener('input', (e) => {
                cityManager.filterSelectOptions(selectId, e.target.value);
            });
        }
    }
}

// Global instance
const carModelManager = new CarModelManager();