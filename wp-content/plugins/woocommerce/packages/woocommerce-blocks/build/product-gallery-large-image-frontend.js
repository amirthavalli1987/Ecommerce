(()=>{"use strict";const e=window.wc.__experimentalInteractivity,o={woocommerce:{productGalleryLargeImage:{styles:({context:e})=>{const{styles:o}=e.woocommerce;return Object.entries(null!=o?o:[]).reduce(((e,[o,t])=>{const c=`${o}:${t};`;return e.length>0?`${e} ${c}`:c}),"")}}}};let t=!1;(0,e.store)({selectors:o,actions:{woocommerce:{handleMouseMove:({event:e,context:o})=>{if("IMG"===e.target.tagName){const t=e.target,c=e.offsetX/t.clientWidth*100,n=e.offsetY/t.clientHeight*100;o.woocommerce.styles.transform="scale(1.3)",o.woocommerce.styles["transform-origin"]=`${c}% ${n}%`}},handleMouseLeave:({context:e})=>{e.woocommerce.styles.transform="scale(1.0)",e.woocommerce.styles["transform-origin"]=""},handleClick:({context:e,event:o})=>{"IMG"===o.target.tagName&&(e.woocommerce.isDialogOpen=!0)}}},effects:{woocommerce:{scrollInto:e=>{e.selectors.woocommerce.isSelected(e)&&(e.context.woocommerce.isDialogOpen===t&&e.ref.scrollIntoView({behavior:"smooth",block:"nearest",inline:"center"}),e.context.woocommerce.isDialogOpen&&e.context.woocommerce.isDialogOpen!==t&&e.ref.closest("dialog")&&(e.ref.scrollIntoView({behavior:"instant",block:"nearest",inline:"center"}),t=e.context.woocommerce.isDialogOpen),e.context.woocommerce.isDialogOpen||e.context.woocommerce.isDialogOpen===t||(e.ref.scrollIntoView({behavior:"instant",block:"nearest",inline:"center"}),t=e.context.woocommerce.isDialogOpen))}}}})})();