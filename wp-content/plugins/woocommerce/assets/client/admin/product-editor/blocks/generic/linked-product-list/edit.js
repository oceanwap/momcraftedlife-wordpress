"use strict";var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(exports,"__esModule",{value:!0}),exports.EmptyStateImage=EmptyStateImage,exports.LinkedProductListBlockEdit=LinkedProductListBlockEdit;const element_1=require("@wordpress/element"),block_templates_1=require("@woocommerce/block-templates"),data_1=require("@wordpress/data"),data_2=require("@woocommerce/data"),components_1=require("@wordpress/components"),i18n_1=require("@wordpress/i18n"),icons_1=require("@wordpress/icons"),tracks_1=require("@woocommerce/tracks"),compose_1=require("@wordpress/compose"),core_data_1=require("@wordpress/core-data"),use_product_entity_prop_1=__importDefault(require("../../../hooks/use-product-entity-prop")),product_list_1=require("../../../components/product-list"),product_select_1=require("../../../components/product-select"),advice_card_1=require("../../../components/advice-card"),constants_1=require("../../../constants"),shopping_bags_1=require("../../../images/shopping-bags"),cash_register_1=require("../../../images/cash-register"),reducer_1=require("./reducer"),get_related_products_1=require("../../../utils/get-related-products"),block_slot_fill_1=require("../../../components/block-slot-fill");function EmptyStateImage({image:e,tip:t}){switch(e){case"CashRegister":return(0,element_1.createElement)(cash_register_1.CashRegister,null);case"ShoppingBags":return(0,element_1.createElement)(shopping_bags_1.ShoppingBags,null);default:return/^https?:\/\//.test(e)?(0,element_1.createElement)("img",{src:e,alt:t,height:88,width:88}):null}}async function getProductsBySearchValue(e="",t=[]){return(0,data_1.resolveSelect)(data_2.PRODUCTS_STORE_NAME).getProducts({search:e,orderby:"title",order:"asc",per_page:5,exclude:t})}function LinkedProductListBlockEdit({attributes:e,context:{postType:t,isInSelectedTab:r}}){const{property:o,emptyState:c}=e,s=(0,element_1.useRef)(!1),[,n]=(0,element_1.useState)(""),[i,d]=(0,element_1.useState)([]),[_,u]=(0,element_1.useState)(!1),l=(0,block_templates_1.useWooBlockProps)(e),[a,p]=(0,element_1.useReducer)(reducer_1.reducer,{linkedProducts:[]}),m=(0,core_data_1.useEntityId)("postType",t),k=(0,reducer_1.getLoadLinkedProductsDispatcher)(p),g=(0,reducer_1.getSelectSearchedProductDispatcher)(p),f=(0,reducer_1.getRemoveLinkedProductDispatcher)(p),[E,S]=(0,use_product_entity_prop_1.default)(o,{postType:t});function h(e="",t=[]){return n(e),u(!0),getProductsBySearchValue(e,t).then((e=>{d(e)})).finally((()=>{u(!1)}))}(0,element_1.useEffect)((()=>{!a.selectedProduct&&E&&E.length>0&&k(E)}),[E,a.selectedProduct]);const P=(0,compose_1.useDebounce)((function(e=""){h(e,[...E||[],m])}),300);(0,element_1.useEffect)((()=>{r&&!s.current&&(s.current=!0,h("",[...E||[],m]))}),[r,s,E,m]);const y=(0,element_1.useCallback)((e=>{if((E||[]).includes(e.id))return;const t=g(e,a.linkedProducts);S(t),h("",[...t||[],m]),(0,tracks_1.recordEvent)("linked_products_product_add",{source:constants_1.TRACKS_SOURCE,field:o,product_id:m,linked_product_id:e.id})}),[E,a.linkedProducts]),[R,v]=(0,element_1.useState)(!1);return(0,element_1.createElement)("div",{...l},(0,element_1.createElement)(block_slot_fill_1.SectionActions,null,(0,element_1.createElement)(components_1.Button,{variant:"tertiary",icon:icons_1.reusableBlock,onClick:async function(){(0,tracks_1.recordEvent)("linked_products_choose_related_click",{source:constants_1.TRACKS_SOURCE,field:o}),p({type:"LOADING_LINKED_PRODUCTS",payload:{isLoading:!0}}),v(!0);const e=await(0,get_related_products_1.getSuggestedProductsFor)({postId:m,forceRequest:!0});if(p({type:"LOADING_LINKED_PRODUCTS",payload:{isLoading:!1}}),v(!1),!e)return;const t=g(e,[]);S(t)},isBusy:R,disabled:R},(0,i18n_1.__)("Choose products for me","woocommerce"))),(0,element_1.createElement)("div",{className:"wp-block-woocommerce-product-linked-list-field__form-group-content"},(0,element_1.createElement)(product_select_1.ProductSelect,{items:i,filter:P,onSelect:y,isLoading:_,selected:null})),a.isLoading&&(0,element_1.createElement)(product_list_1.Skeleton,null),!a.isLoading&&0===a.linkedProducts.length&&(0,element_1.createElement)(advice_card_1.AdviceCard,{tip:c.tip,dismissPreferenceId:`woocommerce-product-${o}-advice-card-dismissed`,isDismissible:c.isDismissible,onDismiss:function(){(0,tracks_1.recordEvent)("linked_products_placeholder_dismiss",{source:constants_1.TRACKS_SOURCE,field:o})}},(0,element_1.createElement)(EmptyStateImage,{...c})),!a.isLoading&&a.linkedProducts.length>0&&(0,element_1.createElement)(product_list_1.ProductList,{products:a.linkedProducts,onRemove:function(e){const t=f(e,a.linkedProducts);S(t),h("",[...t||[],m]),(0,tracks_1.recordEvent)("linked_products_product_remove",{source:constants_1.TRACKS_SOURCE,field:o,product_id:m,linked_product_id:e.id})},onEdit:function(e){(0,tracks_1.recordEvent)("linked_products_product_select",{source:constants_1.TRACKS_SOURCE,field:o,product_id:m,linked_product_id:e.id})},onPreview:function(e){(0,tracks_1.recordEvent)("linked_products_product_preview_click",{source:constants_1.TRACKS_SOURCE,field:o,product_id:m,linked_product_id:e.id})}}))}