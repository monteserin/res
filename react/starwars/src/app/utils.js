export const getIdFromUrl = (url) =>
  url.substring(
    url.lastIndexOf("/", url.lastIndexOf("/") - 1) + 1,
    url.lastIndexOf("/")
  );
