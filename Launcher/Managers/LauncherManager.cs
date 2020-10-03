using System.Diagnostics;
using System.Net;
using System.Runtime.InteropServices;
using System.Text;

namespace Launcher.Managers
{
    public static class LauncherManager
    {
        [DllImport("user32.dll")]
        private static extern int SendMessage(int hWnd, uint Msg, int wParam, int lParam);

        public static void KillGorm(this Process process)
        {
            try
            {
                process.Kill();
            }
            catch
            {
                try
                {
                    SendMessage(process.MainWindowHandle.ToInt32(), 0x0112, 0xF060, 0);
                }
                catch
                {
                    // ignored
                }
            }
        }

        /// <summary>
        /// Sunucudan haberleri alan fonksiyon
        /// </summary>
        /// <param name="url">haberlerin olduğu php dosyasının adresi</param>
        /// <returns></returns>
        public static string GetNews(string url)
        {
            string news;

            try
            {
                using (var web = new WebClient())
                {
                    web.Encoding = Encoding.UTF8;
                    news = web.DownloadString(url);
                }
            }
            catch
            {
                news = string.Empty;
            }

            return news;
        }
    }
}