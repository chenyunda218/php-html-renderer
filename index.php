function base64UrlDecode(string $base64Url): string
{
  return base64_decode(strtr($base64Url, '-_', '+/'));
}
echo base64UrlDecode($_GET["html"]);

