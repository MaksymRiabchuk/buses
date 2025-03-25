const Ziggy = {"url":"http:\/\/buses","port":null,"defaults":{},"routes":{"main_page.index":{"uri":"admin\/main_page","methods":["GET","HEAD"]},"main_page.create":{"uri":"admin\/main_page\/create","methods":["GET","HEAD"]},"main_page.store":{"uri":"admin\/main_page","methods":["POST"]},"main_page.show":{"uri":"admin\/main_page\/{main_page}","methods":["GET","HEAD"],"parameters":["main_page"]},"main_page.edit":{"uri":"admin\/main_page\/{main_page}\/edit","methods":["GET","HEAD"],"parameters":["main_page"]},"main_page.update":{"uri":"admin\/main_page\/{main_page}","methods":["PUT","PATCH"],"parameters":["main_page"]},"main_page.destroy":{"uri":"admin\/main_page\/{main_page}","methods":["DELETE"],"parameters":["main_page"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
