//Includes some metadata and icon links for the head tag

const webAppTitle = document.createElement('meta');
webAppTitle.name = 'apple-mobile-web-app-title';
webAppTitle.content = 'Job Land';
document.head.appendChild(webAppTitle);

const appName = document.createElement('meta');
appName.name = 'application-name';
appName.content = 'Job Land';
document.head.appendChild(appName);

const titleColor = document.createElement('meta');
titleColor.name = 'msapplication-TileColor';
titleColor.content = '#da532c';
document.head.appendChild(titleColor);

const themeColor = document.createElement('meta');
themeColor.name = 'theme-color';
themeColor.content = '#ffffff';
document.head.appendChild(themeColor);

const appleicon = document.createElement('link');
appleicon.rel = 'apple-touch-icon';
appleicon.sizes = '180x180';
appleicon.href = '/images/favicon/apple-touch-icon.png';
document.head.appendChild(appleicon);

const faviconLink = document.createElement('link');
faviconLink.rel = 'icon';
faviconLink.type = 'image/png';
faviconLink.sizes= '64x64';
faviconLink.href = '/images/favicon/favicon-64x64.png';
document.head.appendChild(faviconLink);

const manifest = document.createElement('link');
manifest.rel = 'manifest';
manifest.href = '/images/favicon/site.webmanifest';
document.head.appendChild(manifest);

const maskIcon = document.createElement('link');
maskIcon.rel = 'mask-icon';
maskIcon.href = '/images/favicon/safari-pinned-tab.svg';
maskIcon.color = '#5bbad5';
document.head.appendChild(maskIcon);

//Add more links if necessary

