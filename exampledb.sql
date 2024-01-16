

CREATE DATABASE exampledb;

USE exampledb;


CREATE TABLE PROMITHEFTIS(
                             Kwdikos_promithefti TINYINT PRIMARY KEY,
                             THLEFWNO VARCHAR(10),
                             ONOMA VARCHAR(40)
);

CREATE TABLE KATHGORIA (
                           KWDIKOS VARCHAR(4) PRIMARY KEY,
                           ONOMA VARCHAR(20),
                           PERIGRAFH TEXT
);

CREATE TABLE OXHMA (
                       AR_P CHAR(17) PRIMARY KEY,
                       MARKA VARCHAR(30) NOT NULL,
                       XILIOMETRA INT,
                       XRWMA VARCHAR(12) NOT NULL,
                       VAROS INT NOT NULL,
                       TIMH DECIMAL(10, 2) NOT NULL,
                       KODKAT VARCHAR(4) NOT NULL,
                       KODPROMITH TINYINT NOT NULL,
                       CONSTRAINT FK_OXHMA_PROMITHEFTIS FOREIGN KEY (KODPROMITH) REFERENCES PROMITHEFTIS(Kwdikos_promithefti),
                       CONSTRAINT FK_OXHMA_KATIGORIA FOREIGN KEY (KODKAT) REFERENCES KATHGORIA(KWDIKOS)
);

CREATE TABLE EPISKEYH (
                          KODEP CHAR(10) PRIMARY KEY,
                          KOSTOS FLOAT NOT NULL,
                          PERIGRAFH LONGTEXT NOT NULL,
                          HMEROMINIAEP DATE NOT NULL,
                          KODOXI CHAR(17),
                          CONSTRAINT FK_EPISKEYH_OXHMA FOREIGN KEY (KODOXI) REFERENCES OXHMA(AR_P)
);

CREATE TABLE MIXANIKOS (
                           ID_MIXANIKOY CHAR(10) PRIMARY KEY,
                           NAME_MIXANIKOS VARCHAR(40),
                           PHONE_MIXANIKOS VARCHAR(10),
                           KODEP CHAR(10),
                           CONSTRAINT FK_MIXANIKOS_EPISKEYH FOREIGN KEY (KODEP) REFERENCES EPISKEYH(KODEP)
);

CREATE TABLE ANTALLAKTIKA (
                              CODE_ANT CHAR(10) PRIMARY KEY,
                              COST_ANT FLOAT(6),
                              NAME_ANT VARCHAR(20),
                              DESCR LONGTEXT,
                              KODOXI CHAR(17),
                              CONSTRAINT FK_ANTALLAKTIKA_OXHMA FOREIGN KEY (KODOXI) REFERENCES OXHMA(AR_P)
);

CREATE TABLE ASFALISTIKI_ETAIRIA (
                                     ONOMA_ASFALISTIKIS CHAR(30) PRIMARY KEY,
                                     PHONE_ASF_ETAIRIAS CHAR(10),
                                     LOCATION CHAR(30)
);

CREATE TABLE SUMBOLAIO_ASFALIAS (
                                    EIDOS_ASF TINYTEXT,
                                    COST_ASF INT,
                                    HMER_ASF DATE,
                                    HMER_LIKSIS DATE,
                                    KODOXI CHAR(17) NOT NULL,
                                    ONOMA_ASF_ETAIRIAS CHAR(30) ,
                                    CONSTRAINT FK_ASFALEIA_OXHMA FOREIGN KEY (KODOXI) REFERENCES OXHMA(AR_P),
                                    CONSTRAINT FK_ASFALEIA_ASFALISTIKI_ETAIRIA FOREIGN KEY (ONOMA_ASF_ETAIRIAS) REFERENCES ASFALISTIKI_ETAIRIA(ONOMA_ASFALISTIKIS)
);



CREATE TABLE PELATHS (
                         NAME_PELATHS VARCHAR(40),
                         AR_TAYTOTHTAS VARCHAR(8) PRIMARY KEY,
                         PHONE_PELATHS CHAR(10),
                         HMEROMINIA_EGGRAFHS DATE,
                         KODOXI CHAR(17),
                         CONSTRAINT FK_PELATHS_OXHMA FOREIGN KEY (KODOXI) REFERENCES OXHMA(AR_P)
);

CREATE TABLE ISTORIKO (
                          AR_TAYTOTHTAS_PELATHS VARCHAR(8) NOT NULL,
                          DESCISTORIKO LONGTEXT,
                          CONSTRAINT FK_ISTORIKO_PELATHS FOREIGN KEY (AR_TAYTOTHTAS_PELATHS) REFERENCES PELATHS(AR_TAYTOTHTAS)
);

CREATE TABLE ETAIRIA (
                         ONOMA VARCHAR(40),
                         CODE CHAR(7) PRIMARY KEY,
                         ADDRESS VARCHAR(30)
);


/*  endiamesoi*/
CREATE TABLE Episk_Mhx (
                           ID_MIXANIKOY CHAR(5),
                           KODEP CHAR(10),
                           PRIMARY KEY (ID_MIXANIKOY, KODEP),
                           FOREIGN KEY (ID_MIXANIKOY) REFERENCES MIXANIKOS(ID_MIXANIKOY),
                           FOREIGN KEY (KODEP) REFERENCES EPISKEYH(KODEP)
);

CREATE TABLE ANTALLAKTIKA_OXHMA (
                                    CODE_ANT CHAR(10),
                                    AR_P CHAR(17),
                                    PRIMARY KEY (CODE_ANT, AR_P),
                                    FOREIGN KEY (CODE_ANT) REFERENCES ANTALLAKTIKA(CODE_ANT),
                                    FOREIGN KEY (AR_P) REFERENCES OXHMA(AR_P)
);

CREATE TABLE OXHMA_PELATHS (
                               AR_P CHAR(17),
                               AR_TAYTOTHTAS VARCHAR(8),
                               PRIMARY KEY (AR_TAYTOTHTAS, AR_P),
                               FOREIGN KEY (AR_TAYTOTHTAS) REFERENCES PELATHS(AR_TAYTOTHTAS),
                               FOREIGN KEY (AR_P) REFERENCES OXHMA(AR_P)
);

CREATE TABLE PROMITHEFTIS_ETAIRIA (
                                      Kwdikos_promithefti TINYINT,
                                      CODE CHAR(7),
                                      PRIMARY KEY (Kwdikos_promithefti, CODE),
                                      FOREIGN KEY (Kwdikos_promithefti) REFERENCES PROMITHEFTIS(Kwdikos_promithefti),
                                      FOREIGN KEY (CODE) REFERENCES ETAIRIA(CODE)
);

