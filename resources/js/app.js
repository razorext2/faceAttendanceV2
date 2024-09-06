import { DataTable } from "simple-datatables";
import "./bootstrap"; // Ensure bootstrap is imported if necessary
import "flowbite"; // Ensure flowbite is imported if necessary

if (
    document.getElementById("filter-table") &&
    typeof DataTable !== "undefined"
) {
    const dataTable = new DataTable("#filter-table", {
        tableRender: (_data, table, type) => {
            if (type === "print") {
                return table;
            }
            const tHead = table.childNodes[0];
            const filterHeaders = {
                nodeName: "TR",
                attributes: {
                    class: "search-filtering-row",
                },
                childNodes: tHead.childNodes[0].childNodes.map(
                    (_th, index) => ({
                        nodeName: "TH",
                        childNodes: [
                            {
                                nodeName: "INPUT",
                                attributes: {
                                    class: "datatable-input",
                                    type: "search",
                                    "data-columns": "[" + index + "]",
                                },
                            },
                        ],
                    })
                ),
            };
            tHead.childNodes.push(filterHeaders);
            return table;
        },
    });
}

const scrollContainer = document.getElementById("scrollContainer");
const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");

nextButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: 300,
        behavior: "smooth",
    });
});

prevButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: -300,
        behavior: "smooth",
    });
});
