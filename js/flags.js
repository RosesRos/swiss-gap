import { Flags } from "./datas.js";

const defaultFlag = (index) => {
    return `
            <img id="${Flags[index].id}" src="${Flags[index].img}" alt="${Flags[index].alt}">
        `;
};

const flags = () => {
    return `
        <div class="section_modal_flags_items">
            ${Flags.map((flag) => 
                `<div class="section_modal_flags_item">
                    <img id="${flag.id}" class="section_modal_flags_coco" src="${flag.img}" alt="${flag.alt}">
                </div>`
            ).join(" ")}
        </div>
    `;
}

export {flags, defaultFlag};
