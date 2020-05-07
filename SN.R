setwd('~/prog/sn')
library(rgdal)
library(raster)
w <- readOGR('~/Videos/shp/shp/ne_10m_admin_0_map_units','ne_10m_admin_0_map_units',stringsAsFactors=F)
w@data[which(w$NAME == 'Adjara'),'ISO_A3'] <- 'GEA'
w@data[which(w$NAME == 'Akrotiri'),'ISO_A3'] <- 'WSB'
w@data[which(w$NAME == 'Antigua'),'ISO_A3'] <- 'ACA'
w@data[which(w$NAME == 'Ashmore and Cartier Is.'),'ISO_A3'] <- 'ATC'
w@data[which(w$NAME == 'Azores'),'ISO_A3'] <- 'PAZ'
w@data[which(w$NAME == 'Baikonur'),'ISO_A3'] <- 'KAB'
w@data[which(w$NAME == 'Bajo Nuevo Bank'),'ISO_A3'] <- 'BJN'
w@data[which(w$NAME == 'Baker I.'),'ISO_A3'] <- 'FQI'
w@data[which(w$NAME == 'Barbuda'),'ISO_A3'] <- 'ACB'
w@data[which(w$NAME == 'Bougainville'),'ISO_A3'] <- 'PNB'
w@data[which(w$NAME == 'Brcko District'),'ISO_A3'] <- 'BHB'
w@data[which(w$NAME == 'Brussels'),'ISO_A3'] <- 'BCR'
w@data[which(w$NAME == 'Clipperton I.'),'ISO_A3'] <- 'CLP'
w@data[which(w$NAME == 'Coral Sea Is.'),'ISO_A3'] <- 'CSI'
w@data[which(w$NAME == 'Cyprus U.N. Buffer Zone'),'ISO_A3'] <- 'CNM'
w@data[which(w$NAME == 'Dhekelia'),'ISO_A3'] <- 'ESB'
w@data[which(w$NAME == 'England'),'ISO_A3'] <- 'ENG'
w@data[which(w$NAME == 'Fed. of Bos. & Herz.'),'ISO_A3'] <- 'BHF'
w@data[which(w$NAME == 'Flemish'),'ISO_A3'] <- 'BFR'
w@data[which(w$NAME == 'Gaza'),'ISO_A3'] <- 'GAZ'
w@data[which(w$NAME == 'Georgia'),'ISO_A3'] <- 'GEO'
w@data[which(w$NAME == 'Howland I.'),'ISO_A3'] <- 'HQI'
w@data[which(w$NAME == 'Iraq'),'ISO_A3'] <- 'IRQ'
w@data[which(w$NAME == 'Iraqi Kurdistan'),'ISO_A3'] <- 'IRK'
w@data[which(w$NAME == 'Jan Mayen I.'),'ISO_A3'] <- 'NJM'
w@data[which(w$NAME == 'Jarvis I.'),'ISO_A3'] <- 'DQI'
w@data[which(w$NAME == 'Johnston Atoll'),'ISO_A3'] <- 'JQI'
w@data[which(w$NAME == 'Kingman Reef'),'ISO_A3'] <- 'KQI'
w@data[which(w$NAME == 'Korean DMZ (north)'),'ISO_A3'] <- 'KNZ'
w@data[which(w$NAME == 'Korean DMZ (south)'),'ISO_A3'] <- 'KNX'
w@data[which(w$NAME == 'Kosovo'),'ISO_A3'] <- 'KOS'
w@data[which(w$NAME == 'Madeira'),'ISO_A3'] <- 'PMD'
w@data[which(w$NAME == 'Midway Is.'),'ISO_A3'] <- 'MQI'
w@data[which(w$NAME == 'N. Cyprus'),'ISO_A3'] <- 'CYN'
w@data[which(w$NAME == 'N. Ireland'),'ISO_A3'] <- 'NIR'
w@data[which(w$NAME == 'Navassa I.'),'ISO_A3'] <- 'BQI'
w@data[which(w$NAME == 'Netherlands'),'ISO_A3'] <- 'NLX'
w@data[which(w$NAME == 'Palmyra Atoll'),'ISO_A3'] <- 'LQI'
w@data[which(w$NAME == 'Papua New Guinea'),'ISO_A3'] <- 'PNG'
w@data[which(w$NAME == 'Paracel Is.'),'ISO_A3'] <- 'PFA'
w@data[which(w$NAME == 'Portugal'),'ISO_A3'] <- 'PRT'
w@data[which(w$NAME == 'Puntland'),'ISO_A3'] <- 'SOP'
w@data[which(w$NAME == 'Rep. Srpska'),'ISO_A3'] <- 'BIS'
w@data[which(w$NAME == 'Scarborough Reef'),'ISO_A3'] <- 'SCR'
w@data[which(w$NAME == 'Scotland'),'ISO_A3'] <- 'SCT'
w@data[which(w$NAME == 'Serbia'),'ISO_A3'] <- 'SRB'
w@data[which(w$NAME == 'Serranilla Bank'),'ISO_A3'] <- 'SER'
w@data[which(w$NAME == 'Siachen Glacier'),'ISO_A3'] <- 'KAS'
w@data[which(w$NAME == 'Somalia'),'ISO_A3'] <- 'SOM'
w@data[which(w$NAME == 'Somaliland'),'ISO_A3'] <- 'SOL'
w@data[which(w$NAME == 'Spratly Is.'),'ISO_A3'] <- 'PGA'
w@data[which(w$NAME == 'UNDOF Zone'),'ISO_A3'] <- 'SYU'
w@data[which(w$NAME == 'USNB Guantanamo Bay'),'ISO_A3'] <- 'USG'
w@data[which(w$NAME == 'Vojvodina'),'ISO_A3'] <- 'SRV'
w@data[which(w$NAME == 'Wake Atoll'),'ISO_A3'] <- 'WQI'
w@data[which(w$NAME == 'Wales'),'ISO_A3'] <- 'WLS'
w@data[which(w$NAME == 'Walloon'),'ISO_A3'] <- 'BWR'
w@data[which(w$NAME == 'West Bank'),'ISO_A3'] <- 'WEB'
w@data[which(w$NAME == 'Zanzibar'),'ISO_A3'] <- 'TZZ'
r <- raster('~/R/GLC2000/glc2000_v1_1')

# 1	Tree cover, broadleaved, evergreen 79ff79
# 2	Tree cover, broadleaved. deciduous closed caff4c
# 3	Tree cover, broadleaved, deciduous, open caff4c
# 4	Tree cover needle-leaved, evergreen 6bc3c8
# 5	Tree cover needleleaved, deciduous 6bc3c8
# 6	Tree cover, mixed leaf type 6bc3c8
cores <- c('#79ff79','#caff4c','#caff4c','#6bc3c8','#6bc3c8','#6bc3c8',
# 7	Tree cover, regularly flooded, fresh water 46ac46
# 8	Tree cover, regularly flooded saline water ba69c0
# 9	Mosaic: Tree Cover / Other natural vegetation c3834a
# 10	Tree Cover, burnt ff0000
# 11	Shrub Cover, closed-open, evergreen ffc549
# 12	Shrub Cover, closed-open, deciduous ffc549
           '#46ac46','#ba69c0','#c3834a','#ff0000','#ffc549','#ffc549',
# 13	Herbaceous Cover, closed-open ffddce
# 14	Sparse herbaceous or sparse shrub cover fff9a5
# 15	Regularly flooded shrub and/or herbaceous cover c1c1ff
# 16	Cultivated and managed areas ffffff
# 17	Mosaic: Cropland / Tree Cover / Other natural vegetation ba875a
# 18	Mosaic: Cropland / Shrub and/or grass cover c4ba69
           '#ffddce','#fff9a5','#c1c1ff','#ffffff','#ba875a','#c4ba69',
# 19	Bare Areas d2d2d2
# 20	Water Bodies 69acff
# 21	Snow and Ice d2d2d2
# 22	Artificial surfaces and associated areas 505050
# 23  NA
           '#d2d2d2','#69acff','#d2d2d2','#505050','#000000')

grep('FJI',w$ISO_A3) # 192
grep('NZL',w$ISO_A3) # 193
grep('KIR',w$ISO_A3) # 210
i <- 194
#for (i in 1:nrow(w)) {
for (i in c(192,193,210)) {
  sigla <- w$ISO_A3[i]
  print(paste0(i,'/',nrow(w),' - ',w$NAME_PT[i],' (',sigla,')'))
  flush.console()
  #if (extent(r)[3] > extent(w[i,])[4]) { # pula a Antártica
  if (sigla == 'ATA') { # pula a Antártica
    next
  }
  ext <- extent(w[i,])
  if (ext[1] < -170 & ext[2] > 165) {
    w2 <- w[i,]
    lon0 <- 200
    lon1 <- -200
    for (j in 1:length(w2@polygons)) {
      for (k in 1:length(w2@polygons[[j]]@Polygons)) {
        if (min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < lon0 &
            min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > 0) {
          lon0 <- min(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
        }
        if (max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > lon1 &
            max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < 0) {
          lon1 <- max(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
        }
      }
    }
    # lado ocidental (direito)
    extD <- ext
    extD[1] <- -180
    extD[2] <- lon1
    extD
    rp <- crop(r,extD)
    rP <- mask(rp,w[i,])
    png(paste0('paises/',sigla,'1.png'),dim(rP)[2],dim(rP)[1])
    par(mar=c(0,0,0,0),xaxs='i',yaxs='i',bg=cores[20]) # bg água
    plot(w[i,],border=NA,asp=1,xlim=c(extD[1],extD[2]),ylim=c(extD[3],extD[4]))
    plot(w,add=T,col='gray',border=NA) # continente cinza
    plot(rP,col=cores,zlim=c(1,23),
         add=T,legend=F,maxpixels=dim(rP)[1]*dim(rP)[2])
    dev.off()
    # lado oriental (esquerdo)
    extE <- ext
    extE[2] <- 180
    extE[1] <- lon0
    rp <- crop(r,extE)
    rP <- mask(rp,w[i,])
    png(paste0('paises/',sigla,'2.png'),dim(rP)[2],dim(rP)[1])
    par(mar=c(0,0,0,0),xaxs='i',yaxs='i',bg=cores[20]) # bg água
    plot(w[i,],border=NA,asp=1,xlim=c(extE[1],extE[2]),ylim=c(extE[3],extE[4]))
    plot(w,add=T,col='gray',border=NA) # continente cinza
    plot(rP,col=cores,zlim=c(1,23),
         add=T,legend=F,maxpixels=dim(rP)[1]*dim(rP)[2])
    dev.off()
  } else {
    rp <- crop(r,ext)
    rP <- mask(rp,w[i,])
    png(paste0('paises/',sigla,'.png'),dim(rP)[2],dim(rP)[1])
    par(mar=c(0,0,0,0),xaxs='i',yaxs='i',bg=cores[20]) # bg água
    plot(w[i,],border=NA,asp=1)
    plot(w,add=T,col='gray',border=NA) # continente cinza
    plot(rP,col=cores,add=T,legend=F,maxpixels=dim(rP)[1]*dim(rP)[2],zlim=c(1,23))
    dev.off()
  }
}

# convert +append FJI2.png FJI1.png FJI.png; convert +append KIR2.png KIR1.png KIR.png; convert +append NZL2.png NZL1.png NZL.png
# RUS e USA tem que ser no Gimp, ImageMagick não aguenta
w@data[which(w$GU_A3 == 'KNX'),]
w@data[which(w$GU_A3 == 'KNZ'),]

adm0 <- as.data.frame.table(table(w$ADM0_A3))
head(adm0)
adm0[which(adm0$Freq > 1),]
w@data[which(w$ADM0_A3 == 'PRT'),c('ADM0_A3','GU_A3','NAME')]
iso <- w@data[which(w$ISO_A3 == -99),c('ADM0_A3','GU_A3','ISO_A3','NAME')]
iso <- iso[order(iso$NAME),]
iso
write.table(iso,'iso.csv',sep='\t',na='',quote=F,row.names=F)
##
# Cria arquivo p.csv
head(w@data)
w$GU_A3
#wd <- w@data[,c('GU_A3','NAME_PT','NAME_EN','NAME_ZH','POP_EST','POP_YEAR','GDP_MD_EST','GDP_YEAR','ADM0_A3')]
wd <- w@data[,c('ISO_A3','NAME_PT','NAME_EN','NAME_ZH','POP_EST','POP_YEAR','GDP_MD_EST','GDP_YEAR','ADM0_A3')]
wd$areaKm2 <- NA
wd$x0 <- NA
wd$x1 <- NA
wd$y0 <- NA
wd$y1 <- NA
names(wd) <- c('iso3','pt','en','zh','pop','pop.y','pib','pib.y','adm0','landkm2','x0','x1','y0','y1')
head(wd)
for (i in 1:nrow(wd)) {
  print(wd$pt[i])
  flush.console()
  wd$landkm2[i] <- round(area(w[i,])/1e6,2)
  if (bbox(w[i,])[1] < -170 & bbox(w[i,])[3] > 165) {
    w2 <- w[i,]
    lon0 <- 200
    lon1 <- -200
    for (j in 1:length(w2@polygons)) {
      for (k in 1:length(w2@polygons[[j]]@Polygons)) {
        if (min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < lon0 &
            min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > 0) {
          lon0 <- min(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
        }
        if (max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > lon1 &
            max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < 0) {
          lon1 <- max(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
        }
      }
    }
    wd$x0[i] <- round(lon0,6)
    wd$x1[i] <- round(lon1,6)
  } else {
    wd$x0[i] <- round(bbox(w[i,])[1],6)
    wd$x1[i] <- round(bbox(w[i,])[3],6)
  }
  wd$y0[i] <- round(bbox(w[i,])[2],6)
  wd$y1[i] <- round(bbox(w[i,])[4],6)
}
wd$pt[which(wd$iso3 == 'WSB')] <- 'Akrotiri'
# [1] "ALD" ? -> FIN Finlândia
# [1] "ATG" Antigua and Barbuda
# [1] "UMI" United States Minor Outlying Islands (the)
# [1] "BEL" Belgium
# [1] "PSX" ? -> PSE Palestina
# [1] "BIH" Bosnia and Herzegovina
# [1] "GBR" United Kingdom of Great Britain and Northern Ireland (the)
# [1] "IOA" ? -> AUS Austrália
# [1] "NLD" Netherlands (the)
# [1] "SAH" ? -> ESH Western Sahara
# [1] "SDS" ? -> SSD South Sudan
wd[which(wd$adm0 == 'ALD'),'adm0'] <- 'FIN'
wd[which(wd$adm0 == 'PSX'),'adm0'] <- 'PSE'
wd[which(wd$adm0 == 'IOA'),'adm0'] <- 'AUS'
wd[which(wd$adm0 == 'SAH'),'adm0'] <- 'ESH'
wd[which(wd$adm0 == 'SDS'),'adm0'] <- 'SSD'
# [1] "ATG" 'Antigua and Barbuda','Antígua e Barbuda','安提瓜和巴布达'
# [1] "UMI" 'United States Minor Outlying Islands','Ilhas Menores Distantes dos Estados Unidos','美国本土外小岛屿'
# [1] "BEL" 'Belgium','Bélgica','比利時'
# [1] "PSE" 'Palestine','Palestina','巴勒斯坦'
# [1] "BIH" 'Bosnia and Herzegovina','Bósnia e Herzegovina','波斯尼亚和黑塞哥维那'
# [1] "GBR" 'United Kingdom of Great Britain and Northern Ireland','Reino Unido da Grã-Bretanha e Irlanda do Norte','大不列颠及北爱尔兰联合王国'
# [1] "NLD" 'Holland','Holanda','荷蘭'
wd[nrow(wd)+1,c(1:4)] <- c('ATG','Antígua e Barbuda','Antigua and Barbuda','安提瓜和巴布达')
wd[nrow(wd)+1,c(1:4)] <- c('UMI','Ilhas Menores Distantes dos Estados Unidos','United States Minor Outlying Islands','美国本土外小岛屿')
wd[nrow(wd)+1,c(1:4)] <- c('BEL','Bélgica','Belgium','比利時')
wd[nrow(wd)+1,c(1:4)] <- c('PSE','Palestina','Palestine','巴勒斯坦')
wd[nrow(wd)+1,c(1:4)] <- c('BIH','Bósnia e Herzegovina','Bosnia and Herzegovina','波斯尼亚和黑塞哥维那')
wd[nrow(wd)+1,c(1:4)] <- c('GBR','Reino Unido da Grã-Bretanha e Irlanda do Norte','United Kingdom of Great Britain and Northern Ireland','大不列颠及北爱尔兰联合王国')
wd[nrow(wd)+1,c(1:4)] <- c('NLD','Holanda','Holland','荷蘭')
wd[which(wd$iso3 == 'NLX'),'zh'] <- '尼德蘭'
tail(wd)
wd <- wd[order(wd$pt),]
wd <- wd[-which(wd$iso3 == 'ATA'),]
names(wd)
head(wd)
write.table(wd,'p.csv',sep='\t',na='',quote=F,row.names=F)

##
# Vê os novos x0 e x1 dos países que atravessam a linha de data
#w <- readOGR('.','TM_WORLD_BORDERS-0.3')
w1 <- readOGR('~/Videos/shp/shp/ne_10m_admin_1_states_provinces','ne_10m_admin_1_states_provinces',stringsAsFactors=F)
a3 <- sort(unique(w1$adm0_a3))
#a3 <- sort(w$GU_A3)
i <- 1
j <- 1
k <- 1
for (i in 1:length(a3)) {
  p <- a3[i]
  w2 <- w1[which(w1$adm0_a3 == p),]
  lon0 <- 200
  lon1 <- -200
  for (j in 1:length(w2@polygons)) {
    for (k in 1:length(w2@polygons[[j]]@Polygons)) {
      if (min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < lon0 &
          min(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > 0) {
        lon0 <- min(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
      }
      if (max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) > lon1 &
          max(w2@polygons[[j]]@Polygons[[k]]@coords[,1]) < 0) {
        lon1 <- max(w2@polygons[[j]]@Polygons[[k]]@coords[,1])
      }
    }
  }
  if (p %in% c('FJI','RUS','USA','NZL','UMI','KIR')) {
    print(p)
    print(paste0('min: ',lon0,'  max: ',lon1))
    flush.console()
  }
}

# Territórios/Sede
p <- read.csv('p.csv',sep='\t',stringsAsFactors=F)
head(p)
sov <- vector()
for (i in 1:nrow(p)) {
  if (!p$adm0[i] %in% p$iso3 & !p$adm0[i] %in% sov) {
    print(p$adm0[i])
    sov[length(sov)+1] <- p$adm0[i]
  }
}
sov <- sort(sov)
sov

# [1] "ALD" ? -> FIN Finlândia
# [1] "ATG" Antigua and Barbuda
# [1] "UMI" United States Minor Outlying Islands (the)
# [1] "BEL" Belgium
# [1] "PSX" ? -> PSE Palestina
# [1] "BIH" Bosnia and Herzegovina
# [1] "GBR" United Kingdom of Great Britain and Northern Ireland (the)
# [1] "IOA" ? -> AUS Austrália
# [1] "NLD" Netherlands (the)
# [1] "SAH" ? -> ESH Western Sahara
# [1] "SDS" ? -> SSD South Sudan
p[which(p$adm0 %in% sov),c(1:3,9)]

# [1] "ATG" 'Antigua and Barbuda','Antígua e Barbuda','安提瓜和巴布达'
# [1] "UMI" 'United States Minor Outlying Islands','Ilhas Menores Distantes dos Estados Unidos','美国本土外小岛屿'
# [1] "BEL" 'Belgium','Bélgica','比利時'
# [1] "PSE" 'Palestine','Palestina','巴勒斯坦'
# [1] "BIH" 'Bosnia and Herzegovina','Bósnia e Herzegovina','波斯尼亚和黑塞哥维那'
# [1] "GBR" 'United Kingdom of Great Britain and Northern Ireland','Reino Unido da Grã-Bretanha e Irlanda do Norte','大不列颠及北爱尔兰联合王国'
# [1] "NLD" 'Holland','Holanda','荷蘭'
