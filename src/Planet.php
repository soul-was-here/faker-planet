<?php

namespace Faker\Provider;

class Planet extends Base
{
    /**
     * Earth size in km.
     */
    public const EARTH_SIZE = 6371;
    protected static array $planetStarts = [
        "Abi", "Aby", "Ac", "Acas", "Acon", "Agr", "Agri", "Ai", "Ajer", "Akr", "Alo", "Alon", "Alu", "An", "Ane",
        "Anen", "Aner", "Ani", "Anin", "Anis", "Apoc", "Ar", "Ariv", "Aro", "As", "Asem", "Asi", "Asu", "At", "Ati",
        "Atr", "Aven", "Ba", "Bale", "Ban", "Be", "Beri", "Besh", "Bi", "Blal", "Blat", "Ble", "Bler", "Bli", "Blio",
        "Blo", "Bone", "Br", "Bran", "Bri", "Brus", "Bry", "Bryi", "Bu", "By", "Byi", "Byu", "Byun", "Ca", "Cabo",
        "Cale", "Cap", "Car", "Cari", "Ce", "Cel", "Cen", "Cer", "Cera", "Ch", "Chit", "Chon", "Chra", "Ci", "Cia",
        "Cil", "Cine", "Clan", "Clen", "Clin", "Clu", "Co", "Com", "Con", "Cor", "Core", "Cou", "Cour", "Cr", "Cra",
        "Cre", "Cror", "Cu", "Cum", "Cun", "Da", "Dal", "Dalo", "Dan", "Dard", "De", "Ded", "Del", "Dem", "Den", "Deni",
        "Dep", "Der", "Dere", "Dero", "Deti", "Di", "Dic", "Dime", "Din", "Dis", "Do", "Doa", "Dom", "Don", "Dore",
        "Doro", "Dr", "Dra", "Drac", "Dre", "Dro", "Du", "Dule", "Dute", "Dwe", "Dwi", "Eare", "Eas", "Ebi", "Ebry",
        "Eby", "Ec", "Eci", "Ed", "Eden", "Edi", "Efo", "Efr", "Ei", "Eita", "Ek", "Ekre", "Ekru", "Eky", "El", "Ele",
        "Elea", "Em", "Eme", "En", "Enar", "Ene", "Enen", "Ener", "Eni", "Eno", "Enor", "Eple", "Er", "Ere", "Eren",
        "Eri", "Erid", "Eris", "Ero", "Es", "Esal", "Ese", "Esty", "Eta", "Eter", "Evi", "Ex", "Fa", "Fan", "Fe",
        "Fede", "Feen", "Fel", "Fen", "Fer", "Fi", "Fil", "Fin", "Fir", "Fis", "Fit", "Fla", "Flan", "Fli", "Flo", "Fo",
        "Fomo", "Fon", "For", "Fos", "Fous", "Foy", "Fr", "Fred", "Fu", "Fun", "Ga", "Gan", "Gana", "Gar", "Ge", "Gea",
        "Gec", "Gen", "Geon", "Ger", "Gete", "Gimp", "Gin", "Gis", "Glal", "Gle", "Gli", "Glo", "Goun", "Gra", "Gre",
        "Gri", "Gro", "Gu", "Ha", "Hale", "Hang", "Haph", "Hea", "Hed", "Hede", "Hen", "Heno", "Her", "Herb", "Here",
        "Heri", "Hes", "Het", "Hey", "Hi", "Hich", "Hin", "Hio", "His", "Ho", "Hoar", "Home", "Hon", "Hor", "Hori",
        "Hors", "Hot", "Hu", "Hud", "Huer", "Hun", "Hus", "Hut", "Ia", "Ian", "Icab", "Ice", "Ich", "Ici", "Icon",
        "Icr", "Icra", "Icu", "Id", "Idec", "In", "Ine", "Iner", "Ion", "Ione", "Iplu", "Is", "Isev", "Ish", "Isle",
        "Iste", "It", "Iten", "Ithi", "Je", "Jed", "Jere", "Jin", "Jou", "Joul", "Joun", "Ju", "Jun", "June", "Jup",
        "Jusi", "Ka", "Kale", "Kan", "Ke", "Kel", "Ken", "Kene", "Ker", "Khra", "Khre", "Khri", "Ki", "Kie", "Kin",
        "Klan", "Kle", "Ko", "Kon", "Koni", "Kr", "Kri", "Krio", "Kro", "Ku", "Ky", "Kyli", "Kyn", "Kyni", "Kyno", "La",
        "Lae", "Lana", "Lane", "Le", "Leck", "Lecr", "Led", "Leda", "Leg", "Lel", "Len", "Ler", "Les", "Lese", "Li",
        "Lice", "Lin", "Lir", "Lis", "Lisi", "Litr", "Lo", "Lom", "Lon", "Lu", "Lul", "Lum", "Ly", "Ma", "Mac", "Mal",
        "Man", "Mar", "Mas", "Mat", "Math", "Mawa", "Max", "Me", "Med", "Mem", "Mer", "Mere", "Mesp", "Met", "Mi",
        "Mik", "Min", "Mis", "Mo", "Mock", "Mon", "Mor", "Mose", "Moun", "Mu", "Munt", "Mus", "My", "Myk", "Myke",
        "Myko", "Myku", "Na", "Nar", "Nara", "Nas", "Ne", "Near", "Nel", "Nemn", "Nen", "Nend", "Ner", "Nere", "Nes",
        "Net", "Netd", "Nete", "Ni", "Nin", "Nio", "Nis", "No", "Non", "Nond", "Nor", "Nos", "Noun", "Nu", "Nuin",
        "Oble", "Obry", "Oby", "Ocre", "Odr", "Odri", "Ogol", "Ohen", "Ok", "Oky", "Olin", "Olyn", "Om", "Omo", "Omyk",
        "On", "One", "Onel", "Oni", "Ono", "Op", "Opat", "Oper", "Oph", "Opra", "Or", "Ora", "Ore", "Orn", "Os", "Oser",
        "Oth", "Ou", "Ouno", "Oure", "Oust", "Out", "Pan", "Pane", "Par", "Pata", "Pe", "Pen", "Per", "Pere", "Ph",
        "Pha", "Phen", "Pher", "Phi", "Phin", "Pho", "Pi", "Pin", "Pk", "Ple", "Po", "Pon", "Pran", "Pre", "Pri",
        "Pris", "Prun", "Qu", "Qua", "Que", "Qui", "Qun", "Quo", "Qus", "Ra", "Ram", "Ran", "Rap", "Rash", "Rate",
        "Ratu", "Re", "Rec", "Red", "Reda", "Rel", "Rele", "Rem", "Ren", "Rera", "Rert", "Rete", "Ri", "Rin", "Ro",
        "Ror", "Rul", "Scan", "Scar", "Sce", "Scek", "Scen", "Scer", "Sch", "Sche", "Schi", "Sci", "Sco", "Scon",
        "Scor", "Scre", "Scru", "Scud", "Scus", "Se", "Sec", "Sedi", "Sel", "Sem", "Sen", "Ser", "Sere", "Ses", "Sev",
        "She", "Shen", "Sher", "Shi", "Shin", "Shiz", "Shon", "Shra", "Shre", "Shri", "Si", "Sicd", "Sien", "Sin",
        "Sis", "Sker", "Skiy", "Sko", "Slal", "Sle", "Sler", "Slux", "Soko", "Sp", "Sper", "Sph", "Spha", "Spi", "Spla",
        "Sple", "Splu", "Spo", "Spra", "Spre", "Spru", "Squ", "Sque", "Sta", "Ste", "Sten", "Ster", "Sti", "Stin",
        "Stir", "Ston", "Str", "Stri", "Stro", "Sty", "Stye", "Su", "Sug", "Suma", "Sun", "Sune", "Sung", "Ta", "Tack",
        "Tal", "Tald", "Tam", "Tan", "Tar", "Tate", "Tau", "Te", "Teac", "Ted", "Tel", "Tele", "Ten", "Teni", "Ter",
        "Terd", "Teri", "Tert", "Tesi", "Tesu", "Tet", "Teth", "Thal", "The", "Thep", "Ther", "Thi", "Thin", "Thit",
        "Tho", "Thr", "Thra", "Thre", "Thul", "Ti", "Tia", "Tic", "Tici", "Tido", "Tim", "Tin", "Tini", "Tior", "Tis",
        "Tod", "Toph", "Tor", "Tr", "Tra", "Tran", "Trar", "Trat", "Tre", "Tren", "Tri", "Tru", "Tuno", "Ud", "Uden",
        "Ue", "Ulal", "Uli", "Un", "Uner", "Unin", "Ura", "Ure", "Us", "Usel", "User", "Usi", "Uter", "Va", "Van",
        "Vara", "Ve", "Vec", "Vect", "Ven", "Ver", "Vere", "Vet", "Vi", "Vin", "Vios", "Vis", "Von", "Vope", "Wa",
        "Wac", "Wal", "Wani", "Warb", "Wari", "Wate", "We", "Wer", "Wez", "Wh", "Whi", "Whu", "Wia", "Wis", "Wo",
        "Wofo", "Wora", "Wr", "Wra", "Wral", "Wrel", "Wrem", "Xek", "Xen", "Xi", "Xin", "Xy", "Yan", "Yas"
    ];

    protected static array $planetMiddle = [
        "a", "ac", "ach", "ah", "al", "alo", "alu", "an", "anta", "ar", "ara", "at", "ate", "b", "bin", "blar", "ca",
        "cale", "can", "cas", "ch", "chor", "ci", "cian", "cir", "ciy", "ck", "co", "con", "cop", "cor", "core", "cr",
        "cre", "cri", "crin", "crn", "cu", "cyl", "d", "da", "dak", "de", "den", "di", "do", "dogi", "don", "dore",
        "dose", "dr", "drk", "e", "ed", "ede", "egh", "el", "ema", "en", "ened", "ener", "er", "eral", "ere", "eren",
        "erso", "es", "ev", "fan", "fest", "fon", "fos", "fur", "g", "ge", "gen", "gene", "gle", "glec", "gr", "gra",
        "gre", "gri", "hep", "hess", "hh", "i", "ic", "in", "ine", "ir", "is", "itin", "ix", "je", "jen", "ju", "june",
        "ke", "klir", "l", "la", "las", "le", "lel", "len", "li", "lin", "lo", "lu", "lun", "ly", "m", "ma", "man",
        "mar", "math", "me", "mel", "mer", "mi", "mikr", "mop", "mu", "n", "na", "nan", "nar", "ne", "neck", "nen",
        "nend", "ner", "nfn", "ni", "nid", "nil", "nis", "nofi", "nom", "non", "nor", "nt", "o", "ol", "on", "onel",
        "onos", "or", "ore", "oume", "p", "pal", "pen", "per", "pesh", "ph", "pha", "phe", "pher", "pho", "pi", "por",
        "pri", "pu", "r", "ra", "ran", "rat", "rho", "ri", "ro", "s", "sa", "sain", "se", "sen", "ser", "si", "sis",
        "six", "so", "sope", "st", "sti", "stir", "ston", "str", "su", "sul", "sun", "sur", "sute", "t", "ta", "tal",
        "tami", "tan", "tar", "tay", "te", "teb", "tele", "ten", "ter", "terd", "teri", "tero", "tet", "tex", "th",
        "the", "then", "ti", "til", "tis", "tisi", "to", "ton", "tor", "torm", "toy", "tr", "tra", "tre", "tri", "tro",
        "trob", "tron", "tu", "tud", "tus", "ty", "u", "ue", "uen", "unen", "ur", "va", "w", "wa", "wh", "wian", "wor",
        "zond"
    ];

    protected static array $planetEnd = [
        "abi", "ac", "ach", "ack", "ai", "ake", "al", "ala", "all", "am", "an", "ane", "ank", "ano", "ant", "ap", "aqu",
        "ar", "at", "ate", "ba", "ban", "bax", "bib", "bid", "bin", "bis", "ble", "blo", "boo", "bre", "bu", "bus",
        "by", "ca", "cac", "caj", "cal", "can", "car", "cas", "cat", "cer", "ces", "cha", "chi", "chu", "ci", "cic",
        "cis", "cle", "co", "con", "cop", "cor", "cos", "cou", "cra", "cru", "cun", "cus", "cy", "da", "dah", "dan",
        "de", "den", "der", "di", "dis", "dle", "dlo", "do", "dob", "dop", "dor", "dos", "dot", "dra", "dre", "dro",
        "ds", "du", "dun", "dut", "ech", "ed", "ede", "ek", "el", "ell", "elm", "em", "en", "ene", "enl", "ent", "ep",
        "er", "era", "erd", "ere", "eri", "erm", "ero", "ers", "ert", "erx", "es", "ess", "est", "fal", "fid", "fon",
        "fu", "ga", "gab", "gal", "gan", "gen", "gi", "gin", "gio", "git", "go", "gra", "gre", "gro", "gu", "gul", "ha",
        "he", "het", "hi", "hin", "hos", "ia", "ian", "ias", "ib", "ic", "ice", "icu", "iff", "il", "ili", "im", "in",
        "inc", "ing", "ino", "int", "ir", "is", "ish", "isi", "ist", "isu", "it", "ix", "iyn", "ja", "jid", "jou", "ka",
        "ki", "kic", "la", "laj", "lal", "lan", "lap", "las", "lat", "le", "len", "ler", "les", "li", "lib", "lin",
        "lis", "ll", "lo", "lon", "lor", "los", "lu", "luc", "lui", "lun", "lus", "ly", "lyn", "ma", "mal", "man",
        "mar", "mat", "mer", "mi", "min", "mo", "mon", "mou", "mu", "mun", "mur", "na", "nad", "nal", "nan", "nar",
        "nat", "nds", "nel", "nen", "ner", "ni", "nic", "nil", "nin", "nio", "nis", "no", "nob", "noe", "nok", "non",
        "nop", "nor", "nos", "nou", "of", "ol", "one", "ono", "op", "or", "ot", "ou", "ouy", "oxa", "pa", "pan", "pe",
        "phi", "phy", "pi", "pla", "pli", "pon", "pre", "pro", "qu", "quc", "qun", "ra", "ral", "rar", "rau", "re",
        "rhe", "ri", "ria", "rio", "rit", "rm", "ro", "ros", "rt", "ryl", "sa", "sac", "san", "sas", "sat", "sco",
        "sej", "sek", "sel", "sen", "she", "si", "sia", "sio", "sir", "sis", "sl", "so", "son", "sp", "ste", "su",
        "sua", "suc", "sul", "sun", "ta", "tac", "tal", "tan", "tat", "tau", "te", "tee", "tej", "tel", "tem", "ten",
        "ter", "tet", "tf", "th", "thi", "ti", "tib", "tig", "tim", "tin", "tio", "tiq", "tis", "tit", "tle", "to",
        "toc", "ton", "top", "tor", "tos", "tr", "tra", "tre", "tro", "tse", "tud", "tul", "tun", "tur", "ty", "um",
        "un", "utt", "va", "vag", "ven", "vet", "vi", "vo", "wan", "wat", "we", "wo", "wri", "yse", "zn"
    ];

    protected static array $planetType = [
        'Desert',
        'Earth-like',
        'Gas Giant',
        'Humid',
        'Ice Giant',
        'Ice',
        'Rocky (Extreme temperatures)',
        'Rocky (No atmosphere)',
        'Rocky Furnace',
        'Rocky',
        'Toxic (Atmosphere lethal to humans)',
        'Water World',
    ];

    protected static array $planetNameFormats = [
        '{{planetStarts}}{{planetMiddle}}{{planetEnd}}',
        '{{planetStarts}}{{planetMiddle}}{{planetMiddle}}{{planetEnd}}',
        '{{planetStarts}}{{planetEnd}}',
        '{{planetStarts}}{{planetMiddle}}',
    ];

    /**
     * @return string
     */
    public function planetName(): string
    {
        $format = static::randomElement(static::$planetNameFormats);

        return $this->generator->parse($format);

    }

    /**
     * @return string
     */
    public function planetStarts(): string
    {
        return static::randomElement(static::$planetStarts);
    }

    /**
     * @return string
     */
    public function planetMiddle(): string
    {
        return static::randomElement(static::$planetMiddle);
    }

    /**
     * @return string
     */
    public function planetEnd(): string
    {
        return static::randomElement(static::$planetEnd);
    }

    /**
     * @return string
     */
    public function planetType(): string
    {
        return static::randomElement(static::$planetType);
    }

    /**
     * Planet size based on Earth's radius (R / R Earth).
     *
     * @param  float  $min
     * @param  float  $max
     * @return float
     */
    public function planetSize(float $min = 0.4, float $max = 15): float
    {
        return static::randomFloat(2, $min, $max);
    }

    /**
     * Planet radius in kilometers.
     *
     * Between 0.4x Earth radius (2548 km) and 15x Earth radius (95565 km).
     *
     * @param  int  $min
     * @param  int  $max
     * @return int
     */
    public function planetRadius(int $min = 2548, int $max = 95565): int
    {
        return static::numberBetween($min, $max);
    }

    /**
     * Based on Earth's gravity (G / G Earth).
     *
     * @param  float  $min
     * @param  float  $max
     * @return float
     */
    public function planetGravity(float $min = 0.5, float $max = 400): float
    {
        return static::randomFloat(2, $min, $max);
    }

    /**
     * Planet temperature in Celsius.
     *
     * @param  int  $min
     * @param  int  $max
     * @return int
     */
    public function planetTemperature(int $min = -250, int $max = 1100): int
    {
        return static::numberBetween($min, $max);
    }

    /**
     * Prevalence of water in percent.
     *
     * @param  int  $min
     * @param  int  $max
     * @return int
     */
    public function planetWaterPrevalence(int $min = 0, int $max = 100): int
    {
        return static::numberBetween($min, $max);
    }

    public function planetDesert(): array
    {
        return $this->planetTemplate(
            self::$planetType[0],
            $this->planetSize(0.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-75, 350),
            $this->planetWaterPrevalence(0, 25),
        );
    }

    public function planetEarthLike(): array
    {
        return $this->planetTemplate(
            self::$planetType[1],
            $this->planetSize(0.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-65, 120),
            $this->planetWaterPrevalence(30, 80),
        );
    }

    public function planetGasGiant(): array
    {
        return $this->planetTemplate(
            self::$planetType[2],
            $this->planetSize(4),
            $this->planetGravity(.8),
            $this->planetTemperature(-100),
            $this->planetWaterPrevalence(0, 0),
        );
    }

    public function planetHumid(): array
    {
        return $this->planetTemplate(
            self::$planetType[3],
            $this->planetSize(4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(5, 75),
            $this->planetWaterPrevalence(50, 80),
        );
    }

    public function planetIceGiant(): array
    {
        return $this->planetTemplate(
            self::$planetType[4],
            $this->planetSize(3, 7),
            $this->planetGravity(.8),
            $this->planetTemperature(-250, 350),
            $this->planetWaterPrevalence(0, 15),
        );
    }

    public function planetIce(): array
    {
        return $this->planetTemplate(
            self::$planetType[5],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-250, -50),
            $this->planetWaterPrevalence(0, 15),
        );
    }

    public function planetRockyExtremeTemperatures(): array
    {
        return $this->planetTemplate(
            self::$planetType[6],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-250, 510),
            $this->planetWaterPrevalence(0, 0),
        );
    }

    public function planetRockyNoAtmosphere(): array
    {
        return $this->planetTemplate(
            self::$planetType[7],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-240, -170),
            $this->planetWaterPrevalence(0, 15),
        );
    }

    public function planetRockyFurnace(): array
    {
        return $this->planetTemplate(
            self::$planetType[8],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(300, 600),
            $this->planetWaterPrevalence(0, 0),
        );
    }

    public function planetRocky(): array
    {
        return $this->planetTemplate(
            self::$planetType[9],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-90, 90),
            $this->planetWaterPrevalence(15, 50),
        );
    }

    public function planetToxic(): array
    {
        return $this->planetTemplate(
            self::$planetType[10],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-100, 250),
            $this->planetWaterPrevalence(0, 60),
        );
    }

    public function planetWaterWorld(): array
    {
        return $this->planetTemplate(
            self::$planetType[11],
            $this->planetSize(.4, 9),
            $this->planetGravity(.7, 2),
            $this->planetTemperature(-20, 98),
            $this->planetWaterPrevalence(75)
        );
    }

    protected function planetTemplate(
        $planetType,
        $planetSize,
        $planetGravity,
        $planetTemperature,
        $planetWaterPrevalence
    ): array {
        return [
            'planetName' => $this->planetName(),
            'planetType' => $planetType,
            'planetSize' => $planetSize,
            'planetRadius' => intval($planetSize * self::EARTH_SIZE),
            'planetGravity' => $planetGravity,
            'planetTemperature' => $planetTemperature,
            'planetWaterPrevalence' => $planetWaterPrevalence,
        ];
    }

}
